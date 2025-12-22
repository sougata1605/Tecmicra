<?php
 include "partials/header.php"; 

// require_once '../classes/Session.php';


// require_once '../classes/User.php';

Session::start();

if(Session::isLoggedIn()) {
    header('Location: dashboard.php');
    exit;
}

$error = '';
if($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $user = new User();
    if($user->login($username, $password)) {
        header('Location: dashboard.php');
        exit;
    } else {
        $error = "Invalid username or password!";
    }
}

?>

<div class="container d-flex justify-content-center align-items-center min-vh-100">
    <div class="card shadow-lg border-0" style="width: 380px;">
        <div class="card-body p-4">
            <h3 class="text-center mb-4 fw-bold">Admin Login</h3>

            <form method="post">
                <div class="mb-3">
                    <label class="form-label">Username</label>
                    <input 
                        type="text" 
                        name="username" 
                        class="form-control" 
                        placeholder="Enter username" 
                        required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Password</label>
                    <input 
                        type="password" 
                        name="password" 
                        class="form-control" 
                        placeholder="Enter password" 
                        required>
                </div>

                <div class="d-grid">
                    <button type="submit" class="btn btn-success">
                        Login
                    </button>
                </div>
            </form>

            <?php if($error): ?>
                <div class="alert alert-danger mt-3 text-center">
                    <?= $error ?>
                </div>
            <?php endif; ?>
        </div>
    </div>
</div>

<?php include "partials/footer.php"; ?>

