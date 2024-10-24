<?php

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

$router->get('/file-manager','FileManagerController@index');

// Detail pages
$router->get('/books/(\d+)','BooksController@book');
$router->get('/authors/(\d+)','AuthorsController@author');
$router->get('/publishers/(\d+)','PublishersController@publisher');
$router->get('/categories/(\d+)','CategoriesController@category');
$router->get('/users/(\d+)','UsersController@user');
$router->get('/orders/(\d+)','OrdersController@order');


// CRUD pages
$router->get('/publishers/add','PublishersController@add');
$router->get('/publishers/(\d+)/edit','PublishersController@edit');
$router->get('/categories/add','CategoriesController@add');
$router->get('/categories/(\d+)/edit','CategoriesController@edit');

// CRUD actions
$router->post('/publishers/add','PublishersController@create');
$router->post('/publishers/(\d+)/edit','PublishersController@update');
$router->post('/publishers/(\d+)/delete','PublishersController@delete');
$router->post('/categories/add','CategoriesController@create');
$router->post('/categories/(\d+)/edit','CategoriesController@update');
$router->post('/categories/(\d+)/delete','CategoriesController@delete');

// API
$router->get('/api/books','BooksController@api');
$router->post('/api/authors/add','AuthorsController@APIcreate');