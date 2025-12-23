<?php
require_once __DIR__ . '/../config/Database.php'; 

class Contact {
    private PDO $conn;

    public function __construct() {
        $db = new Database();
        $this->conn = $db->connect();
    }

   
    public function save(array $data): bool {
        $stmt = $this->conn->prepare(
            "INSERT INTO contacts (name, email, mobile, message, image)
             VALUES (:name, :email, :mobile, :message, :image)"
        );
        return $stmt->execute($data);
    }

    
    public function getAll(): array {
        $stmt = $this->conn->query("SELECT * FROM contacts ORDER BY id DESC");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
?>

