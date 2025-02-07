<?php
session_start();
require_once __DIR__ . "/../Models/UserModel.php";

class AuthController {
    private $userModel;

    public function __construct() {
        $this->userModel = new User();
    }

    public function register() {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $nom = trim($_POST["nom"]);
            $prenom = trim($_POST["prenom"]);
            $email = filter_var(trim($_POST["email"]), FILTER_VALIDATE_EMAIL);
            $password = $_POST["password"];

            $errors = [];
            if (empty($nom)) $errors[] = "Le nom est requis";
            if (empty($prenom)) $errors[] = "Le prénom est requis";
            if (!$email) $errors[] = "Email invalide";
            if (strlen($password) < 6) $errors[] = "Le mot de passe doit contenir au moins 6 caractères";

            if (empty($errors)) {
                if ($this->userModel->register($nom, $prenom, $email, $password)) {
                    $_SESSION['success'] = "Inscription réussie! Vous pouvez maintenant vous connecter.";
                    header("Location: /Veille_app/public/login");
                    exit();
                } else {
                    $errors[] = "L'inscription a échoué. Veuillez réessayer.";
                }
            }
            
            $_SESSION['errors'] = $errors;
            require __DIR__ . "/../views/auth/register.php";
        } else {
            require __DIR__ . "/../views/auth/register.php";
        }
    }

    public function login() {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $email = $_POST["email"];
            $password = $_POST["password"];

            if (empty($email) || empty($password)) {
                $_SESSION['errors'] = ["Tous les champs sont requis"];
                require __DIR__ . "/../views/auth/login.php";
                return;
            }

            $user = $this->userModel->login($email, $password);
            if ($user) {
                $_SESSION["user"] = $user;
                header("Location: /Veille_app/public/dashboard");
                exit();
            } else {
                $_SESSION['errors'] = ["Email ou mot de passe incorrect"];
                require __DIR__ . "/../views/auth/login.php";
            }
        } else {
            require __DIR__ . "/../views/auth/login.php";
        }
    }

    public function logout() {
        session_destroy();
        header("Location: /Veille_app/public/login");
        exit();
    }
}