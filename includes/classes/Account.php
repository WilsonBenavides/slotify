<?php
	class Account {

		private $errorArray;

		public function __construct() {
			$this->errorArray = array();
		}

		public function register($un, $fn, $ln, $em, $em2, $pw, $pw2) {
			$this->validateUsername($un);
			$this->validateFirstName($fn);
			$this->validateLastName($ln);
			$this->validateEmails($em, $em2);
			$this->validatePasswords($pw, $pw2);
		}

		private function validateUsername($un) {

			if(strlen($un) > 25 || strlen($un) < 5) {
				array_push($this->errorArray, "Your username must be between 5 and 25 characters");
				return;
			}

			//TODO: check if username exists

		}

		private function validateFirstName($fn) {	
			if(strlen($fn) > 25 || strlen($fn) < 2) {
				array_push($this->errorArray, "Your First Name must be between 2 and 25 characters");
				return;
			}			
		}

		private function validateLastName($ln) {		
			if(strlen($ln) > 25 || strlen($ln) < 5) {
				array_push($this->errorArray, "Your Last Name must be between 2 and 25 characters");
				return;
			}
		}

		private function validateEmails($em, $em2) {
			if($em != $em2) {
				array_push($this->errorArray, "Your emails don't match");
			}

			if(!filter_var($em, FILTER_VALIDATE_EMAIL)) {
				array_push($this->errorArray, "Email is invalid");
			}
		}

		private function validatePasswords($pw, $pw2) {
			
		}


	}
?>