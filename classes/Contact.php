<?php
class Contact extends Database {

    public function save($data) {
        $stmt = $this->conn->prepare(
            "INSERT INTO contacts (name,email,mobile,message,image)
             VALUES (:name,:email,:mobile,:message,:image)"
        );
        return $stmt->execute($data);
    }

    public function getAll() {
        return $this->conn->query("SELECT * FROM contacts ORDER BY id DESC");
    }
}
