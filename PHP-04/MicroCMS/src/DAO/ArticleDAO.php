<?php

	namespace MicroCMS\DAO;

	use MicroCMS\Domain\Article;

	class ArticleDAO extends DAO
	{

		public function findAll() {

			$sql = "select * from t_article order by art_id desc";
			$result = $this->getDb()->fetchAll($sql);

			// Convert query result to an array of domain objects
			$articles = array();
			foreach ($result as $row) {
				$articleId = $row['art_id'];
				$articles[$articleId] = $this->buildDomainObject($row);
			}
			return $articles;
		}

		protected function buildDomainObject($row) {

			$article = new Article();
			$article->setId($row['art_id']);
			$article->setTitle($row['art_title']);
			$article->setContent($row['art_content']);

			return $article;
		}

		public function find($id) {

			$sql = "select * from t_article where art_id=?";
			$row = $this->getDb()->fetchAssoc($sql, array($id));

			if ($row){
				return $this->buildDomainObject($row);
			}
			else{
				throw new \Exception("No article matching id " . $id);
			}
		}
	}