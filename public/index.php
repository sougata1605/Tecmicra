<?php
require_once __DIR__ . '/../classes/Session.php';
require_once __DIR__ . '/../classes/User.php';

Session::start();

$error = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = trim($_POST['username'] ?? '');
    $password = $_POST['password'] ?? '';

    if ($username === '' || $password === '') {
        $error = "Please fill in all fields.";
    } else {
        $user = new User();



        if ($user->login($username, $password)) {


            header("Location: ../admin/dashboard.php");
            exit;
        } else {
            $error = "Invalid username or password!";
        }
    }
}

if (Session::isLoggedIn()) {

    header("Location: ../admin/dashboard.php");
    exit;
}

include_once "partials/header.php";
?>

<div class="container d-flex justify-content-center align-items-center min-vh-100">
    <div class="card shadow-lg border-0" style="width: 380px;">
        <div class="card-body p-4">
            <h3 class="text-center mb-4 fw-bold">Admin Login</h3>

            <form method="post" action="">
                <div class="mb-3">
                    <label class="form-label">Username</label>
                    <input type="text" name="username" class="form-control" placeholder="Enter username" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Password</label>
                    <input type="password" name="password" class="form-control" placeholder="Enter password" required>
                </div>

                <div class="d-grid">
                    <button type="submit" class="btn btn-success">Login</button>
                </div>
            </form>

            <?php if ($error): ?>
                <div class="alert alert-danger mt-3 text-center">
                    <?= htmlspecialchars($error) ?>
                </div>
            <?php endif; ?>
        </div>
    </div>
</div>

<?php include_once "partials/footer.php"; ?>