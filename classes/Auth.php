<?php
class Auth extends Database {

    public function login($username, $password) {
        $stmt = $this->conn->prepare("SELECT * FROM admins WHERE username=?");
        $stmt->execute([$username]);
        $admin = $stmt->fetch();

        if ($admin && password_verify($password, $admin['password'])) {
            $_SESSION['admin'] = true;
            return true;
        }
        return false;
    }

    public function check() {
        return isset($_SESSION['admin']);
    }

    public function logout() {
        session_destroy();
    }
}