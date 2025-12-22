<?php
class FileUploader {
    private $uploadDir = "../uploads/";

    public function upload($file) {
        $newName = uniqid() . ".jpg";
        move_uploaded_file($file['tmp_name'], $this->uploadDir . $newName);
        return $newName;
    }
}