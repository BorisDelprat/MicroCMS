<?php

	namespace GestionLivres\DAO;

	use GestionLivres\Domain\Book;

	class BookDAO extends DAO
	{
		
		public function findAll() {

			$sql = "select * from book order by book_id desc";
			$result = $this->getDb()->fetchAll($sql);

			// Convert query result to an array of domain objects
			$books = array();
			foreach ($result as $row) {
				$bookId = $row['book_id'];
				$books[$bookId] = $this->buildDomainObject($row);
			}
			return $books;
		}

		public function findAllByAuthor($auth_id) {

			// The associated article is retrieved only once
			$author = $this->authorDAO->find($auth_id);

			// art_id is not selected by the SQL query
			// The article won't be retrieved during domain objet construction
			$sql = "select * from book where auth_id=?";

			$result = $this->getDb()->fetchAll($sql, array($auth_id));

			// Convert query result to an array of domain objects
			$books = array();

			foreach ($result as $row) {
				$bookId = $row['auth_id'];
				$book = $this->buildDomainObject($row);

				// The associated article is defined for the constructed comment
				$book->setAuthor($author);
				$books[$bookId] = $book;
			}
			return $books;
		}

		protected function buildDomainObject($row) {

			$book = new Book();
			$book->setId($row['book_id']);
			$book->setTitle($row['book_title']);
			$book->setIsbn($row['book_isbn']);
			$book->setSummary($row['book_summary']);
			$book->setAuthId($row['auth_id']);

			return $book;
		}

		public function find($id) {

			$sql = "select * from book where book_id=?";
			$row = $this->getDb()->fetchAssoc($sql, array($id));

			if ($row){
				return $this->buildDomainObject($row);
			}
			else{
				throw new \Exception("No book matching id " . $id);
			}
		}
	}