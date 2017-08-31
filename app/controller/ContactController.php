<?php

	namespace App\Controller;

	use PHPMailer\PHPMailer\PHPMailer;
	use PHPMailer\PHPMailer\Exception;

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
			$formValidation = $this->validateForm($_POST);

			//Form is not valid
			if (!$formValidation['valid']) {
				$this->session->setFlash($formValidation['errorMessage'], 'error');
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

			$this->redirect('contact');
		}

		/*
		 * Validates form
		 */
		public function validateForm($data) {
			$return = [
				'errorMessage' => null,
				'valid' => true
			];

			if (!$this->tokenIsValid($_POST['token'])) {
				$return['errorMessage'] = "Vous n'avez pas le droit d'effectuer cette action.";
				$return['valid'] = false;
				return $return;
			}

			if (empty($data['name'])) {
				$return['errorMessage'] = "Donnez-moi votre nom, ce sera plus simple :)";
				$return['valid'] = false;
				return $return;
			}

			if (empty($data['mail'])) {
				$return['errorMessage'] = "Sans votre adresse email, je ne pourrai pas vous répondre !";
				$return['valid'] = false;
				return $return;
			}

			if (!filter_var($data['mail'], FILTER_VALIDATE_EMAIL)) {
			    $return['errorMessage'] = "Votre adresse email semble incorrecte !";
				$return['valid'] = false;
				return $return;
			}

			if (empty($data['message'])) {
				$return['errorMessage'] = "Vous n'avez rien à me dire ?";
				$return['valid'] = false;
				return $return;
			}

			return $return;
		}
	}