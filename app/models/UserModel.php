<?php
require_once __DIR__ . "/../../core/database.php";

class User {
    private $pdo;

    public function __construct() {
        $this->pdo = Database::connect();
    }

    public function register($nom, $prenom, $email, $password) {
        $hashedPassword = password_hash($password, PASSWORD_BCRYPT);
        $stmt = $this->pdo->prepare("INSERT INTO utilisateurs (nom, prenom, email, mot_de_passe) VALUES (?,?,?,?)");
        return $stmt->execute([$nom, $prenom, $email, $hashedPassword]);
    }

    public function login($email, $password) {
        $stmt = $this->pdo->prepare("SELECT * FROM utilisateurs WHERE email = ? AND mot_de_passe = ?");
        $stmt->execute([$email, $password]);
        $user = $stmt->fetch(PDO::FETCH_ASSOC);
        return $user ? $user : false;
    }
}
