<?php
require_once __DIR__ . '/../classes/Session.php';
require_once __DIR__ . '/../classes/User.php';

Session::start();

if (Session::isLoggedIn()) {
    header('Location: admin/dashboard.php');
    exit;
}

$error = '';
$success = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = trim($_POST['username'] ?? '');
    $password = $_POST['password'] ?? '';
    $confirm  = $_POST['confirm_password'] ?? '';

    if ($username === '' || $password === '' || $confirm === '') {
        $error = "All fields are required.";
    } elseif ($password !== $confirm) {
        $error = "Passwords do not match.";
    } else {
        $user = new User();

        if ($user->register($username, $password)) {
            $success = "Registration successful. You can now login.";
        } else {
            $error = "Username already exists.";
        }
    }
}

include_once "partials/header.php";
?>

<div class="container d-flex justify-content-center align-items-center min-vh-100">
    <div class="card shadow-lg border-0" style="width: 420px;">
        <div class="card-body p-4">
            <h3 class="text-center mb-4 fw-bold">Admin Registration</h3>

            <form method="post">
                <div class="mb-3">
                    <label class="form-label">Username</label>
                    <input type="text" name="username" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Password</label>
                    <input type="password" name="password" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Confirm Password</label>
                    <input type="password" name="confirm_password" class="form-control" required>
                </div>

                <div class="d-grid">
                    <button type="submit" class="btn btn-primary">Register</button>
                </div>
            </form>

            <?php if ($error): ?>
                <div class="alert alert-danger mt-3 text-center">
                    <?= htmlspecialchars($error) ?>
                </div>
            <?php endif; ?>

            <?php if ($success): ?>
                <div class="alert alert-success mt-3 text-center">
                    <?= htmlspecialchars($success) ?>
                </div>
            <?php endif; ?>

            <div class="text-center mt-3">
                <a href="index.php">Already have an account? Login</a>
            </div>
        </div>
    </div>
</div>

<?php include_once "partials/footer.php"; ?>