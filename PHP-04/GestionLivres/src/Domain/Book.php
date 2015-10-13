<?php


	namespace GestionLivres\Domain;


	class Book
	{

		private $book_id;
		private $book_title;
		private $book_isbn;
		private $book_summary;
		private $auth_id;


		public function getId() {
			return $this->book_id;
		}

		public function setId($book_id) {
			$this->book_id = $book_id;
		}

		public function getTitle() {
			return $this->book_title;
		}

		public function setTitle($book_title) {
			$this->book_title = $book_title;
		}

		public function getIsbn() {
			return $this->book_isbn;
		}

		public function setIsbn($book_isbn){
			$this->book_isbn = $book_isbn;
		}

		public function getSummary(){
			return $this->book_summary;
		}

		public function setSummary($book_summary){
			$this->book_summary = $book_summary;
		}

		public function getAuthId(){
			return $this->auth_id;
		}

		public function setAuthId($auth_id){
			$this->auth_id = $auth_id;
		}

	}