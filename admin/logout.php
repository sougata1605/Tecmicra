<?php
require_once __DIR__ . '/../classes/Session.php';

Session::destroy();
header("Location: ../public/index.php");
exit;