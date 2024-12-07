<?php
//fitxer per definir les rutes
return [
    '/' => '../App/Controllers/HomeController.php@index',
    '/home' => '../App/Controllers/HomeController.php@index',
    '/index' => '../App/Controllers/HomeController.php@index',
    '/index.php' => '../App/Controllers/HomeController.php@index',

    '/books' => '../App/Controllers/BookController.php@index',
    '/books/create' => '../App/Controllers/BookController.php@create',
    '/books/store' => '../App/Controllers/BookController.php@store',
    '/books/edit/{id}' => '../App/Controllers/BookController.php@edit',
    '/books/update/{id}' => '../App/Controllers/BookController.php@update',
    '/books/delete/{id}' => '../App/Controllers/BookController.php@delete',
    '/books/destroy/{id}' => '../App/Controllers/BookController.php@destroy',
    '/books/confirm-delete/{id}' => '../App/Controllers/BookController.php@confirmDelete',

    '/vehicles' => '../App/Controllers/VehiclesController.php@index',
    '/vehicles/create' => '../App/Controllers/VehiclesController.php@create',
    '/vehicles/store' => '../App/Controllers/VehiclesController.php@store',
    '/vehicles/edit/{id}' => '../App/Controllers/VehiclesController.php@edit',
    '/vehicles/update/{id}' => '../App/Controllers/VehiclesController.php@update',
    '/vehicles/delete/{id}' => '../App/Controllers/VehiclesController.php@delete',
    '/vehicles/destroy/{id}' => '../App/Controllers/VehiclesController.php@destroy',
    '/vehicles/confirm-delete/{id}' => '../App/Controllers/VehiclesController.php@confirmDelete',
];