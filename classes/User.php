<?php
require_once __DIR__ . '/../config/Database.php';
require_once __DIR__ . '/Session.php';

class User {
    private PDO $conn;

    public function __construct() {
        $db = new Database();
        $this->conn = $db->connect();
    }

    public function login(string $username, string $password): bool {
        $stmt = $this->conn->prepare(
            "SELECT * FROM admins WHERE username = :username LIMIT 1"
        );
        $stmt->execute(['username' => $username]);
        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($user && password_verify($password, $user['password'])) {
            Session::start();
            Session::set('user_id', $user['id']);
            Session::set('username', $user['username']);
            return true;
        }

        return false;
    }
}
?>
