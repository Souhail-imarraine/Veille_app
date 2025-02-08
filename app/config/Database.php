<?php

class Database {
    private static ?Database $instance = null;
    private PDO $connection;
    
    // Database configuration
    private string $host = "localhost";
    private string $dbname = "veillehub";
    private string $username = "root";
    private string $password = "";

    // Private constructor to prevent direct instantiation
    private function __construct() {
        try {
            $dsn = "mysql:host={$this->host};dbname={$this->dbname};charset=utf8mb4";
            $options = [
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            ];
            
            $this->connection = new PDO($dsn, $this->username, $this->password, $options);
        } catch (PDOException $e) {
            throw new Exception("Connection failed: " . $e->getMessage());
        }
    }

    public static function getInstance(): Database {
        if (self::$instance === null) {
            self::$instance = new Database();
        }
        return self::$instance;
    }

    // Get the PDO connection
    public function getConnection(): PDO {
        return $this->connection;
    }

    // Method to test the connection
    public function testConnection(): bool {
        try {
            $this->connection->query('SELECT 1');
            return true;
        } catch (PDOException $e) {
            return false;
        }
    }
}

