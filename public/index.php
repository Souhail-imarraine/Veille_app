<?php

require_once '../app/core/Session.php';
Session::init();

require_once '../app/core/Router.php';
require_once '../app/controllers/AuthController.php';
require_once '../app/controllers/HomeController.php';
require_once '../app/controllers/AdminController.php';

$router = new Router();

// Auth routes
$router->add('GET', '/', [HomeController::class, 'index']);
$router->add('GET', '/login', [AuthController::class, 'login']);
$router->add('POST', '/login', [AuthController::class, 'login']);
$router->add('GET', '/register', [AuthController::class, 'register']);
$router->add('POST', '/register', [AuthController::class, 'register']);
$router->add('GET', '/logout', [AuthController::class, 'logout']);
$router->add('GET', '/Home', [HomeController::class, 'index']);

// Admin routes
$router->add('GET', '/admin', [AdminController::class, 'adminView']);
$router->add('GET', '/admin/users', [AdminController::class, 'usersView']);
$router->add('GET', '/admin/calendar', [AdminController::class, 'calendarView']);
$router->add('GET', '/admin/subjects', [AdminController::class, 'subjectsView']);


$router->add('GET', '/admin/presentations', [AdminController::class, 'presentations']);

$router->dispatch();







