<?php

	namespace App\Controller;

	use PHPMailer\PHPMailer\PHPMailer;
	use PHPMailer\PHPMailer\Exception;
	use Core\Helper\FormValidatorHelper;

	class ContactController extends AppController {
		public function __construct() {
			parent::__construct();
		}

		/*
		 * Returns contact page
		 */
		public function index() {
			$this->render('contact.twig.html', ['flash' => $this->session->getFlash(), 'token' => $this->session->getToken()]);
		}

		/*
		 * Sends mail
		 */
		public function sendMail() {
			//Form error handler
			$validator = new FormValidatorHelper($_POST, $this->session->getToken());
			$formIsValid = $validator->checkForm();

			//Form is not valid
			if (!$formIsValid) {
				$this->session->setFlash($validator->getFirstError(), 'error');
			} else {
				$mail = new PHPMailer(true);
				try {
				    //Server settings
				    $mail->SMTPDebug = $this->debug ? 2 : 0;                                 
				    $mail->isSMTP();                                      
				    $mail->Host = $this->smtpHost;  					  
				    $mail->SMTPAuth = true;                               
				    $mail->Username = $this->smtpUsername;     
				    $mail->Password = $this->smtpPassword;
				    $mail->SMTPSecure = 'tls';                      
				    $mail->Port = 587;       
				    $mail->CharSet = 'UTF-8';

				    //Recipients
				    $mail->setFrom($_POST['mail'], $_POST['name']);
				    $mail->addAddress($this->mailTo, $this->mailToName);
				    $mail->addReplyTo($_POST['mail'], $_POST['name']);

				    //Content
				    $mail->isHTML(true);
				    $mail->Subject = 'Contact blog';
				    $mail->Body    = nl2br($_POST['message']);
				    $mail->AltBody = $_POST['message'];

				    $mail->send();
			    	$this->session->setFlash("Merci ! Votre message a bien été envoyé. Je vous répondrai dans les meilleurs délais !", "success");
				} catch (Exception $e) {
					if ($this->debug) {
				    	echo 'Mailer Error: ' . $mail->ErrorInfo;					
					} else {
					    $this->session->setFlash("Une erreur est survenue lors de l'envoi de votre message. Merci de réessayer plus tard.", "error");
					}
				}
			}

			$this->redirect($_POST['url']);
		}
	}