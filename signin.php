<?php

include realpath(__DIR__ . '/includes/layout/header.php');

if (isset($_GET["verified"])) {
    array_push($success, "Your email has been verified successfully.");
}

if (isset($_POST["sign_in"])) {
    $email = $_POST["email"];
    $password = $_POST["password"];

    $verifyEmailAndPassword = $usersFacade->verifyEmailAndPassword($email, $password);
    $signIn = $usersFacade->signIn($email, $password);
    if ($verifyEmailAndPassword > 0) {
        while ($row = $signIn->fetch(PDO::FETCH_ASSOC)) {
            // Redirect to email verification page if email has not been verified
            if ($row["is_email_verified"] == 0) {
                header('Location: verify-email?verification');
            }
            // Redirect to homepage if user type is user
            if ($row["user_type"] == 0) {
                $_SESSION["user_id"] = $row["id"];
                $_SESSION["name"] = $row["name"];
                $_SESSION["email"] = $row["email"];
                header("Location: index");
            }
            // Redirect to merchant dashboard if user type is merchant
            if ($row["user_type"] == 1) {
                $_SESSION["user_id"] = $row["id"];
                $_SESSION["name"] = $row["name"];
                header("Location: dashboard/merchant/index");
            }
            // Redirect to rider dashboard if user type is rider
            if ($row["user_type"] == 2) {
                $_SESSION["user_id"] = $row["id"];
                $_SESSION["name"] = $row["name"];
                header("Location: dashboard/rider/index");
            }
            // Redirect to admin dashboard if user type is admin
            if ($row["user_type"] == 3) {
                $_SESSION["user_id"] = $row["id"];
                $_SESSION["name"] = $row["name"];
                header("Location: dashboard/admin/index");
            }
        }
    } else {
        array_push($danger, "Incorrect username or password!");
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
                    <h2 class="text-dark my-0">Welcome Back</h2>
                    <p class="text-50">Sign in to continue</p>
                    <?php include('errors.php'); ?>
                    <form class="mt-5 mb-4" action="signin" method="post">
                        <div class="form-group">
                            <label class="text-dark pb-1">Email</label>
                            <input type="email" placeholder="Enter Email" class="form-control py-1" name="email" required>
                        </div>
                        <div class="form-group">
                            <label class="text-dark pb-1">Password</label>
                            <input type="password" placeholder="Enter Password" id="password" class="form-control py-1" name="password" required>
                            <div>
                                <input type="checkbox" class="mt-2" onclick="showHidePassword()"> Show Password
                            </div>
                        </div>
                        <button class="btn btn-lg bg-primary text-uppercase w-100" name="sign_in">Sign In</button>
                    </form>
                    <a href="forgot-password" class="text-decoration-none">
                        <p class="text-center">Forgot your password?</p>
                    </a>
                    <div class="d-flex align-items-center justify-content-center">
                        <a href="signup">
                            <p class="text-center m-0">Don't have an account? Sign up</p>
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