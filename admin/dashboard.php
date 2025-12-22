<?php
session_start();
require "../classes/Contact.php";
require "../classes/Auth.php";

$auth = new Auth();
if (!$auth->check()) {
    header("Location: login.php");
}

$contact = new Contact();
$data = $contact->getAll();
?>

<table class="table">
<tr>
<th>Name</th><th>Email</th><th>Image</th>
</tr>
<?php foreach ($data as $row): ?>
<tr>
<td><?= $row['name'] ?></td>
<td><?= $row['email'] ?></td>
<td><img src="../uploads/<?= $row['image'] ?>" width="50"></td>
</tr>
<?php endforeach; ?>
</table>

<a href="logout.php">Logout</a>
