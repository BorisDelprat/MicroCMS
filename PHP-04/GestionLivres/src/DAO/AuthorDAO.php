<?php

	namespace GestionLivres\DAO;

	use GestionLivres\Domain\Author;

	class AuthorDAO extends DAO
	{

		private $bookDAO;

		public function setBookDAO(BookDAO $bookDAO)
		{
			$this->bookDAO = $bookDAO;
		}


		protected function buildDomainObject($row)
		{

			$author = new Author();
			$author->setId($row['auth_id']);
			$author->setAuthFirstName($row['auth_first_name']);
			$author->setAuthLastName($row['author_last_name']);

			if (array_key_exists('auth_id', $row)) {

				// Find and set the associated article
				$auth_id = $row['auth_id'];
				$author = $this->authorDAO->find($auth_id);
				$author->setId($author);
			}
			return $author;
		}

	}