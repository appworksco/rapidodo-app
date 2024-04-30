<?php

include realpath(__DIR__ . '/includes/layout/header.php');

if (isset($_GET["sent"])) {
    array_push($success, "A verification code has been sent to your email.");
}
if (isset($_GET["verification"])) {
    array_push($danger, "It seems that your email has not been verified. Check your email for the verification code.");
}

if (isset($_POST["verify_now"])) {

    $numberOne = $_POST["number_one"];
    $numberTwo = $_POST["number_two"];
    $numberThree = $_POST["number_three"];
    $numberFour = $_POST["number_four"];

    $verifyNumber = $numberOne . $numberTwo . $numberThree . $numberFour; // Concate the for digit numbers

    $fetchUsers = $usersFacade->fetchUsers();
    foreach ($fetchUsers as $fetchUser) {
        $emailVerificationCode = $fetchUser["email_verification_code"];
    }

    if ($verifyNumber == $emailVerificationCode) {
        $isEmailVerified = $usersFacade->isEmailVerified($emailVerificationCode);
        header('Location: signin?verified');
    } else {
        array_push($danger, "Verification code does not match!");
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
                <div class="px-5 col-10 mx-auto mb-4">
                    <h2 class="mb-3">Verify your email</h2>
                    <h6 class="text-black-50">Enter your OTP code here</h6>
                    <?php include('errors.php'); ?>
                    <form action="verify-email" method="post">
                        <div class="row my-5 mx-0 otp">
                            <div class="col pe-1 ps-0">
                                <input type="text" class="form-control form-control-lg" name="number_one" maxlength="1">
                            </div>
                            <div class="col px-2">
                                <input type="text" class="form-control form-control-lg" name="number_two" maxlength="1">
                            </div>
                            <div class="col px-2">
                                <input type="text" class="form-control form-control-lg" name="number_three" maxlength="1">
                            </div>
                            <div class="col ps-1 pe-0">
                                <input type="text" class="form-control form-control-lg" name="number_four" maxlength="1">
                            </div>
                        </div>
                        <button class="btn btn-lg btn-primary w-100" name="verify_now">Verify Now</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

<?php include realpath(__DIR__ . '/includes/layout/footer.php') ?>

<script>
    jQuery($ => {
        let $inputs = $('input').on('input', e => {
            let $input = $(e.target);
            let index = $inputs.index($input);
            if ($input.val().length === $input.prop('maxlength')) {
                $inputs.eq(index + 1).focus();
            }
        });
    });
</script>