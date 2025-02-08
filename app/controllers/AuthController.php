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


            // Basic validation
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
            $email = $_POST['email'] ?? '';
            $password = $_POST['password'] ?? '';

            $user = $this->userModel->verifyLogin($email, $password);
            
            if ($user) {
                if ($user['statut'] !== 'approuvé') {
                    $this->render('login', ['error' => 'Votre compte est en attente d\'approbation']);
                    return;
                }

                $_SESSION['user_id'] = $user['id'];
                $_SESSION['user_role'] = $user['role'];
                $_SESSION['user_nom'] = $user['nom'];
                $_SESSION['user_prenom'] = $user['prenom'];
                
                header('Location: /dashboard');
                exit;
            } else {
                $this->render('login', ['error' => 'Email ou mot de passe incorrect']);
            }
        }

        $this->render('login');
    }

    public function logout() {
        session_destroy();
        header('Location: /');
        exit;
    }
}
