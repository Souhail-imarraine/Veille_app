<?php
require_once "core/Router.php";
require_once "app/Controllers/AuthController.php";

$router = new Router();
$authController = new AuthController();

$router->get("/login", function() {
    require "app/Views/auth/login.php";
});

$router->post("/login", [$authController, "login"]);

$router->get("/register", function() {
    require "app/Views/auth/register.php";
});

$router->post("/register", [$authController, "register"]);

$router->get("/logout", [$authController, "logout"]);

$router->resolve($_SERVER["REQUEST_URI"], $_SERVER["REQUEST_METHOD"]);
?>
