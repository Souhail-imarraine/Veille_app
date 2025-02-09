<?php
require_once __DIR__.'/../core/BaseController.php';
require_once __DIR__.'/../models/User.php';

class AuthController extends BaseController {

    private User $userModel;

    public function __construct() {
        $this->userModel = new User();
    }

    public function register() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $nom = htmlspecialchars($_POST['nom']) ?? '';
            $prenom = htmlspecialchars($_POST['prenom']) ?? '';
            $email = htmlspecialchars($_POST['email']) ?? '';
            $password = htmlspecialchars($_POST['password']) ?? '';
            $role = 'etudiant';

            if (empty($nom) || empty($prenom) || empty($email) || empty($password)) {
                $this->render('register', ['error' => 'Tous les champs sont obligatoires']);
                return;
            }

            if ($this->userModel->findByEmail($email)) {
                $this->render('register', ['error' => 'Cet email est déjà utilisé']);
                return;
            }

            if ($this->userModel->create($nom, $prenom, $email, $password, $role)) {
                header('Location: /login');
                exit;
            } else {
                $this->render('register', ['error' => 'Erreur lors de l\'inscription']);
            }
        }

        $this->render('register');
    }

    public function login() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $email = htmlspecialchars($_POST['email']) ?? '';
            $password = htmlspecialchars($_POST['password']) ?? '';
            
            if (empty($email) || empty($password)) {
                $this->render('login', ['error' => 'Veuillez remplir tous les champs']);
                return;
            }
            
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $this->render('login', ['error' => 'Format d\'email invalide']);
                return;
            }

            $user = $this->userModel->verifyLogin($email, $password);

            if ($user) {
                Session::set('user_id', $user['id']);
                Session::set('role', $user['role']);
                Session::set('email', $user['email']);
                Session::set('name', $user['nom'] . ' ' . $user['prenom']);
                Session::set('logged_in', true);
                
                if ($user['role'] === 'enseignant') {
                    header('Location: /admin');
                } else {
                    header('Location: /Home');
                }
                exit();
            } else {

                $this->render('login', ['error' => 'Email ou mot de passe incorrect']);
                return;
            }
        }

        $this->render('login');
    }

    public function logout() {
        Session::destroy();
        header('Location: /login');
        exit();
    }
}
