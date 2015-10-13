<?php

	namespace GestionLivres\Domain;


	class Author
	{

		private $auth_id;

		private $auth_first_name;

		private $auth_last_name;


		public function getId() {
			return $this->auth_id;
		}

		public function setId($auth_id) {
			$this->auth_id = $auth_id;
		}

		public function getAuthFirstName() {
			return $this->auth_first_name;
		}

		public function setAuthFirstName($auth_first_name) {
			$this->auth_first_name = $auth_first_name;
		}

		public function getAuthLastName() {
			return $this->auth_last_name;
		}

		public function setAuthLastName($auth_last_name) {
			$this->auth_last_name = $auth_last_name;
		}


	}