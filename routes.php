<?php

//$router->get('/', function() { echo 'Dit is de index vanuit de route'; });
$router->setNamespace('\App\Controllers');

// Overviews
$router->get('/', 'HomeController@index');
$router->get('/books','BooksController@index');
$router->get('/authors','AuthorsController@index');
$router->get('/publishers','PublishersController@index');
$router->get('/users','UsersController@index');
$router->get('/categories','CategoriesController@index');
$router->get('/orders','OrdersController@index');
$router->get('/order-statuses','OrderStatusesController@index');

// Detail pages
$router->get('/books/(\d+)','BooksController@book');
$router->get('/authors/(\d+)','AuthorsController@author');
$router->get('/publishers/(\d+)','PublishersController@publisher');
$router->get('/categories/(\d+)','CategoriesController@category');
$router->get('/users/(\d+)','UsersController@user');