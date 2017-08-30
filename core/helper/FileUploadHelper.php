<?php

	namespace Core\Helper;

	class FileUploadHelper {
		public $file;
		public $destinationFolder;
		public $extension;
		public $allowedExtensions = [];
		public $fileName;
		public $error = "Erreur lors du téléchargement du fichier : ";
		
		public function __construct($file, $destinationFolder, $allowedExtensions) {
			$this->file = $file;
			$this->destinationFolder = ROOT.'/'.$destinationFolder;
			if (!is_dir($this->destinationFolder)) {
			    mkdir($this->destinationFolder, 0777, true);
			}
			$this->setAllowedExtensions($allowedExtensions);
			$this->extension = $this->getFileExtension($this->file);
			$this->fileName = time().'.'.$this->extension;
		}

		/*
		 * Set allowed extensions
		 */
		public function setAllowedExtensions($extensions) {
			if (is_array($extensions)) {
				$this->allowedExtensions = $extensions;
			} else {
				$this->allowedExtensions[] = $extensions;
			}
		}

		/*
		 * Uploads file
		 */
		public function upload() {
		    //Check if file exists
			if (empty($this->file['name'][0])) {
				$this->error .= "Aucun fichier sélectionné.";
				return false;
			}

			//Check file extension
			if (!in_array($this->getFileExtension($this->file), $this->allowedExtensions)) {
				$this->error .= "Erreur lors du téléchargement du fichier : extension non autorisée.";
				return false;
			}

			// // Check file size
			// if ($file['size'][0] > $this->maxSize) {
			// 	$error .= "La taille du fichier excède la taille autorisée (".$this->maxSize.").<br/>";
			// }

		    // Move file
		    if (move_uploaded_file($this->file['tmp_name'], $this->destinationFolder.$this->fileName)) {
		        return true;
		    } else {
		        $this->error .= "Échec de l'enregistrement du fichier sur le serveur.";			        
				return false;
		    }
		}

		/*
		 * Deletes file
		 */
		public function delete($file) {
			$file = $this->destinationFolder.$file;
			if (file_exists($file)) {
				try {
					unlink($file);
				} catch (\Exception $e) {
					echo $e->getMessage();
				}
			} else {
				$this->error .= "Impossible de supprimer le fichier ".$file." car celui-ci est introuvable.";
			}
		}

		/*
		 * Gets file extension
		 */
		public function getFileExtension($file) {
			$ext = pathinfo($file['name'], PATHINFO_EXTENSION);	
		    return $ext;
		}
}