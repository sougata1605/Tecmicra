<?php

require_once __DIR__ . '/../public/partials/header.php';

Session::start();


if (!Session::isLoggedIn()) {
    header("Location: ../public/login.php");
    exit;
}

$contact = new Contact();
$inquiries = $contact->getAll();



?>

<div class="container-fluid py-4">

    <div class="d-flex justify-content-between align-items-center mb-3">
        <h3>Admin Dashboard</h3>

        <div>
            <a href="../public/contact_form.php" class="btn btn-success me-2">
                ➕ Add Inquiry
            </a>

            <a href="logout.php" class="btn btn-danger">
                Logout
            </a>
        </div>
    </div>

    <div class="card shadow">
        <div class="card-body">
            <table class="table table-bordered table-striped align-middle">
                <thead class="table-dark">
                    <tr>
                        <th>#</th>
                        <th>Image</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Mobile</th>
                        <th>Message</th>
                    </tr>
                </thead>

                <tbody>
                <?php if (!empty($inquiries)):
                    $i=1; 
                    
                    ?>
                    <?php foreach ($inquiries as $row): ?>
                        <tr>
                            <td><?php echo $i++;  ?></td>
                            <td>
                                <img src="../uploads/<?= htmlspecialchars($row['image']) ?>"
                                     width="60" height="60"
                                     style="object-fit:cover;border-radius:6px;">
                            </td>
                            <td><?= htmlspecialchars($row['name']) ?></td>
                            <td><?= htmlspecialchars($row['email']) ?></td>
                            <td><?= htmlspecialchars($row['mobile']) ?></td>
                            <td><?= htmlspecialchars($row['message']) ?></td>
                        </tr>
                    <?php endforeach; ?>
                <?php else: ?>
                    <tr>
                        <td colspan="6" class="text-center">No inquiries found</td>
                    </tr>
                <?php endif; ?>
                </tbody>
            </table>
        </div>
    </div>

</div>

<?php

require_once __DIR__ . '/../public/partials/footer.php';
?>
