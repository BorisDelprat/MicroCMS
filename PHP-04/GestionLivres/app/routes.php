<?php

	// Home page
	$app->get('/', function () use ($app) {
		$books = $app['dao.book']->findAll();
		return $app['twig']->render('index.html.twig', array('books' => $books));
	})->bind('home');

	// Book details with author
	$app->get('/book/{id}', function ($id) use ($app) {
		$book = $app['dao.book']->find($id);
		$author = $app['dao.author']->find($book->getAuthId());
		$book->setAuthor($author);
		$author->setBook($book);


		return $app['twig']->render('book.html.twig', array('book' => $book, 'author' => $author));
	})->bind('book');