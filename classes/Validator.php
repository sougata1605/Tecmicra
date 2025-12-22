<?php

class Validator
{
    public function validateName(string $name): void
    {
        if (empty(trim($name))) {
            throw new Exception("Name is required.");
        }

        if (!preg_match("/^[a-zA-Z\s]{2,50}$/", $name)) {
            throw new Exception("Name must contain only letters and spaces.");
        }
    }

    public function validateEmail(string $email): void
    {
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            throw new Exception("Invalid email address.");
        }
    }

    public function validateMobile(string $mobile): void
    {
        if (!preg_match("/^[6-9][0-9]{9}$/", $mobile)) {
            throw new Exception("Mobile number must be a valid 10-digit number.");
        }
    }

    public function validateImage(array $file): void
    {
        if ($file['error'] !== UPLOAD_ERR_OK) {
            throw new Exception("Image upload failed.");
        }

        $allowedMime = ['image/jpeg'];
        $finfo = finfo_open(FILEINFO_MIME_TYPE);
        $mime  = finfo_file($finfo, $file['tmp_name']);
        finfo_close($finfo);

        if (!in_array($mime, $allowedMime)) {
            throw new Exception("Only JPEG images are allowed.");
        }

        if ($file['size'] > 500 * 1024) {
            throw new Exception("Image size must be less than 500KB.");
        }
    }
}