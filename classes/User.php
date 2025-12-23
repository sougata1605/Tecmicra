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





    public function usernameExists(string $username): bool
    {
        $stmt = $this->conn->prepare(
            "SELECT id FROM admins WHERE username = :username"
        );
        $stmt->execute(['username' => $username]);
        return $stmt->rowCount() > 0;
    }


    public function register(string $username, string $password): bool
    {
        if ($this->usernameExists($username)) {
            return false;
        }

        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

        $stmt = $this->conn->prepare(
            "INSERT INTO  admins (username, password) VALUES (:username, :password)"
        );

        return $stmt->execute([
            'username' => $username,
            'password' => $hashedPassword
        ]);
    }





}
?>
