<?php

include realpath(__DIR__ . '/includes/layout/header.php');

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require './vendor/phpmailer/PHPMailer.php';
require './vendor/phpmailer/Exception.php';
require './vendor/phpmailer/SMTP.php';

// Initialize the facade classes
$mail = new PHPMailer(true);

if (isset($_POST["sign_up"])) {
    $name = $_POST["name"];
    $rapidodoPoints = number_format(0, 2);
    $email = $_POST["email"];
    $password = $_POST["password"];
    $emailVerificationCode = mt_rand(1000, 9000); // Generate 4 random number for email verification

    $verifyEmail = $usersFacade->verifyEmail($email);
    if ($verifyEmail <= 0) {
        // Send verification code in email
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
        $mail->Subject = 'Rapidodo Email Verification Code';
        $mail->Body = 'Your rapidodo email verification code is: ' . $emailVerificationCode;
        $mail->send();
        $signUp = $usersFacade->signUp($name, $rapidodoPoints, $email, $password, $emailVerificationCode);
        if ($signUp) {
            header('Location: verify-email?sent');
        }
    } else {
        array_push($danger, "Email has already been taken!");
    }
}

?>

<body>
    <div class="login-page vh-100">
        <video loop autoplay muted id="vid">
            <source src="dist/vid/bg.mp4" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <div class="d-flex align-items-center justify-content-center vh-100">
            <div class="px-5 col-md-6 ms-sm-auto">
                <div class="px-5 col-10 mx-auto">
                    <h2 class="text-dark my-0">Hello There</h2>
                    <p class="text-50">Sign Up to continue</p>
                    <?php include('errors.php'); ?>
                    <form class="mt-5 mb-4" action="signup" method="post">
                        <div class="form-group">
                            <label class="text-dark pb-1">Name: <span class="small">ex. Juan Dela Cruz</span></label>
                            <input type="text" placeholder="Enter Name" class="form-control py-1" name="name" required>
                        </div>
                        <div class="form-group">
                            <label class="text-dark pb-1">Email:</label>
                            <input type="email" placeholder="Enter Email" class="form-control py-1" name="email" required>
                        </div>
                        <div class="form-group">
                            <label class="text-dark pb-1">Password:</label>
                            <input type="password" placeholder="Enter Password" id="password" class="form-control py-1" name="password" required>
                            <div>
                                <input type="checkbox" class="mt-2" onclick="showHidePassword()"> Show Password
                            </div>
                        </div>
                        <button class="btn btn-lg bg-primary text-uppercase w-100" name="sign_up">Sign Up</button>
                    </form>
                    <div class="d-flex align-items-center justify-content-center">
                        <a href="signin">
                            <p class="text-center m-0">Already had an account? Sign in</p>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

<script>
    function showHidePassword() {
        var x = document.getElementById("password");
        if (x.type === "password") {
            x.type = "text";
        } else {
            x.type = "password";
        }
    }
</script>