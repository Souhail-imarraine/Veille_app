<?php

require_once __DIR__.'/../config/Database.php';

class User {
    private PDO $db;

    public function __construct() {
        $this->db = Database::getInstance()->getConnection();
    }

    public function create(string $nom, string $prenom, string $email, string $password, string $role): bool {
        try {
            $query = "INSERT INTO utilisateurs (nom, prenom, email, mot_de_passe, role) 
                     VALUES (:nom, :prenom, :email, :password, :role)";
            
            $stmt = $this->db->prepare($query);
            return $stmt->execute([
                ':nom' => $nom,
                ':prenom' => $prenom,
                ':email' => $email,
                ':password' => password_hash($password, PASSWORD_DEFAULT),
                ':role' => $role
            ]);
        } catch (PDOException $e) {
            error_log("Create user error: " . $e->getMessage());
            return false;
        }
    }

    public function verifyLogin(string $email, string $password): ?array {
        try {
            $query = "SELECT * FROM utilisateurs WHERE email = :email AND statut = 'approuvé' LIMIT 1";
            $stmt = $this->db->prepare($query);
            $stmt->execute([':email' => $email]);
            
            $user = $stmt->fetch();
            
            if ($user && password_verify($password, $user['mot_de_passe'])) {
                unset($user['mot_de_passe']); // Don't return the password hash
                return $user;
            }
            
            return null;
        } catch (PDOException $e) {
            error_log("Login verification error: " . $e->getMessage());
            return null;
        }
    }

    public function findByEmail(string $email): ?array {
        try {
            $query = "SELECT * FROM utilisateurs WHERE email = :email LIMIT 1";
            $stmt = $this->db->prepare($query);
            $stmt->execute([':email' => $email]);
            
            $result = $stmt->fetch();
            return $result ?: null;
        } catch (PDOException $e) {
            error_log("Find user error: " . $e->getMessage());
            return null;
        }
    }

    public function updateStatus(int $userId, string $status): bool {
        try {
            $query = "UPDATE utilisateurs SET statut = :status WHERE id = :id";
            $stmt = $this->db->prepare($query);
            return $stmt->execute([
                ':status' => $status,
                ':id' => $userId
            ]);
        } catch (PDOException $e) {
            error_log("Update status error: " . $e->getMessage());
            return false;
        }
    }

    public function getTeachers(): array {
        try {
            $query = "SELECT * FROM utilisateurs WHERE role = 'enseignant' AND statut = 'approuvé'";
            $stmt = $this->db->prepare($query);
            $stmt->execute();
            return $stmt->fetchAll();
        } catch (PDOException $e) {
            error_log("Get teachers error: " . $e->getMessage());
            return [];
        }
    }

    public function getStudents(): array {
        try {
            $query = "SELECT * FROM utilisateurs WHERE role = 'etudiant' AND statut = 'approuvé'";
            $stmt = $this->db->prepare($query);
            $stmt->execute();
            return $stmt->fetchAll();
        } catch (PDOException $e) {
            error_log("Get students error: " . $e->getMessage());
            return [];
        }
    }
}
