<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Sougata Chatterjee </title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

  
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

    <style>
        body {
            background: linear-gradient(135deg, #f5f7fa, #c3cfe2);
            min-height: 100vh;
        }
        .card {
            border-radius: 1rem;
        }
        .brand-title {
            font-weight: 600;
            letter-spacing: 1px;
        }

        .footer {
  position: fixed;
  left: 0;
  bottom: 0;
  width: 100%;
  background-color: black;
  color: white;
  text-align: center;
}
    </style>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-success shadow">
    <div class="container">
        <span class="navbar-brand brand-title">
            <i class="bi bi-headset"></i> Tecmicra Contact and support system 
        </span>
    </div>
</nav>



<?php   

require_once "../vendor/autoload.php";
require "../config/Database.php";
require "../classes/Validator.php";
require "../classes/FileUploader.php";
require "../classes/Contact.php";
require "../classes/Mailer.php";


?>
