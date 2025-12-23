
<?php
include_once "partials/header.php";

$status  = "success";
$message = "Thank you! Your request has been submitted successfully.";

try {
    $validator = new Validator();
    $uploader  = new FileUploader();
    $contact   = new Contact();
    $mailer    = new Mailer();

    
    $validator->validateName($_POST['name']);
    $validator->validateEmail($_POST['email']);
    $validator->validateMobile($_POST['mobile']);
    $validator->validateImage($_FILES['image']);

    $imageName = $uploader->upload($_FILES['image']);

    $contact->save([
        "name"    => $_POST['name'],
        "email"   => $_POST['email'],
        "mobile"  => $_POST['mobile'],
        "message" => $_POST['message'],
        "image"   => $imageName
    ]);

    $mailer->send($_POST['email'], $_POST['name'], $imageName);

} catch (Exception $e) {
    $status  = "error";
    $message = $e->getMessage();
}



?>


<main class="flex-grow-1">
    <div class="container h-100 d-flex align-items-center justify-content-center">
        <div class="row w-100 justify-content-center">
            <div class="col-md-6">

                <div class="card shadow-lg border-0 rounded-4">
                    <div class="card-body p-4 text-center">

                        <i class="bi bi-check-circle-fill text-success display-3"></i>

                        <h4 class="mt-3">Submission Successful</h4>

                        <p class="text-muted">
                          <b>  Thank you <?php echo  ucwords($_POST['name'])  ?>! Your request has been submitted successfully. </b>
                        </p>

                        <a href="contact_form.php" class="btn btn-success mt-3 px-4">
                            ← Back to Form
                        </a>

                    </div>
                </div>

            </div>
        </div>
    </div>
</main>

<?php include_once "partials/footer.php"; ?>
