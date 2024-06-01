<?php

include realpath(__DIR__ . '/includes/layout/header.php');

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require './vendor/phpmailer/PHPMailer.php';
require './vendor/phpmailer/Exception.php';
require './vendor/phpmailer/SMTP.php';

// Initialize the facade classes
$usersFacade = new UsersFacade;
$mail = new PHPMailer(true);

if (isset($_POST["send"])) {
    $email = $_POST["email"];
    
    // Get password by email
    $fetchUsers = $usersFacade->fetchPasswordByEmail($email);
    foreach ($fetchUsers as $fetchUser) {
        $password = $fetchUser["password"];
    }

    $verifyEmail = $usersFacade->verifyEmail($email);
    if ($verifyEmail == 1) {
        // Send password in email
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->Username = 'info.appworksco@gmail.com';
        $mail->Password = 'jfvbgmibhnnapaue';
        $mail->SMTPSecure = 'ssl';
        $mail->SMTPAuth = true;
        $mail->Port = '465';
        $mail->setFrom('info.appworksco@gmail.com');
        $mail->addAddress($email);
        $mail->isHTML(true);
        $mail->Subject = 'Rapidodo Forgot Password';
        $mail->Body = 'Your rapidodo password is: ' . $password;
        $mail->send();
        array_push($success, "Your password has been sent to your email.");
    } else {
        array_push($danger, "$email is not yet registered!");
    }
}

?>

<body>
    <div class="osahan-signup login-page">
        <video loop autoplay muted id="vid">
            <source src="dist/vid/bg.mp4" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <div class="d-flex align-items-center justify-content-center flex-column vh-100">
            <div class="px-5 col-md-6 ms-auto">
                <div class="px-5 col-10 mx-auto">
                    <h2>Forgot password</h2>
                    <p>Enter your email address below and we'll send you an email with your rapidodo password.</p>
                    <?php include('errors.php'); ?>
                    <form class="mt-5 mb-4" action="forgot-password" method="post">
                        <div class="form-group">
                            <label class="form-label pb-1">Email</label>
                            <input type="email" class="form-control py-1" name="email">
                        </div>
                        <button class="btn btn-lg bg-primary text-uppercase w-100" name="send">Send</button>
                    </form>
                </div>
                <div class="new-acc d-flex align-items-center justify-content-center">
                    <a href="signin">
                        <p class="text-center m-0">Already an account? Sign in</p>
                    </a>
                </div>
            </div>
        </div>
    </div>
</body>

<?php include realpath(__DIR__ . '/includes/layout/footer.php') ?>