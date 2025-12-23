<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

class Mailer {

    public function send($to, $name, $imagePath) {

        $mail = new PHPMailer(true);

        try {
            $mail->isSMTP();
            $mail->Host = "smtp.gmail.com";
            $mail->SMTPAuth = true;
            $mail->Username = "bvgdocument@gmail.com";
            $mail->Password = "ogta wjqy szrh bcdu";
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
            $mail->Port = 587;

            $mail->setFrom("bvgdocument@gmail.com", "MIS Team ");
            $mail->addAddress($to, $name);

            $mail->Subject = "Form Submission Received";
            $mail->Body = "Hello $name,\n\n We have received your form successfully.";

            $mail->addAttachment("../uploads/" . $imagePath);

            $mail->send();

        } catch (Exception $e) {
            throw new Exception("Mail Error: " . $mail->ErrorInfo);
        }
    }
}
