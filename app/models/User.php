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
            // First check if user exists regardless of status
            $query = "SELECT * FROM utilisateurs WHERE email = :email LIMIT 1";
            $stmt = $this->db->prepare($query);
            $stmt->execute([':email' => $email]);
            
            $user = $stmt->fetch(PDO::FETCH_ASSOC);
            
            if (!$user) {
                return null;
            }

            if (!password_verify($password, $user['mot_de_passe'])) {
                return null; 
            }

            if ($user['statut'] !== 'approuvé') {
                return null; 
            }

            unset($user['mot_de_passe']);
            return $user;
            
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
    
    public function getStudents(): array {
        try {
            $query = "SELECT id, nom, prenom, email, statut, created_at FROM utilisateurs 
                     WHERE role = 'etudiant' 
                     ORDER BY created_at DESC";
            $stmt = $this->db->prepare($query);
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            error_log("Get students error: " . $e->getMessage());
            return [];
        }
    }

    public function approveUser($userId) {
        $sql = "UPDATE users SET statut = 'approuvé' WHERE id = ?";
        $stmt = $this->db->prepare($sql);
        return $stmt->execute([$userId]);
    }

    public function rejectUser($userId) {
        $sql = "UPDATE users SET statut = 'rejeté' WHERE id = ?";
        $stmt = $this->db->prepare($sql);
        return $stmt->execute([$userId]);
    }

    public function blockUser($userId) {
        $sql = "UPDATE users SET statut = 'bloqué' WHERE id = ?";
        $stmt = $this->db->prepare($sql);
        return $stmt->execute([$userId]);
    }

    public function reactivateUser($userId) {
        $sql = "UPDATE users SET statut = 'approuvé' WHERE id = ?";
        $stmt = $this->db->prepare($sql);
        return $stmt->execute([$userId]);
    }
}