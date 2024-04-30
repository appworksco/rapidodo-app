<?php

include realpath(__DIR__ . '/includes/layout/header.php');

// Redirect user if user is not logged in
if ($userId == 0) {
    header('Location: signin');
}

if (isset($_POST["add_delivery_address"])) {
    $userId = $_POST["user_id"];
    $streetPurok = $_POST["street_purok"];
    $barangay = $_POST["barangay"];
    $municipalityCity = $_POST["municipality_city"];
    $landmark = $_POST["landmark"];
    $nickname = $_POST["nickname"];

    $addDelveryAddress = $addressesFacade->addDeiveryAddress($userId, $streetPurok, $barangay, $municipalityCity, $landmark, $nickname);
    if ($addDelveryAddress) {
        array_push($success, "Delivery Address has been added successfully!");
    }
}

if (isset($_POST["save_changes"])) {
    $userId = $_POST["user_id"];
    $name = $_POST["name"];
    $mobileNumber = $_POST["mobile_number"];

    $saveChanges = $usersFacade->saveChanges($name, $mobileNumber, $userId);
    if ($saveChanges) {
        array_push($success, "Your account has been updated successfully!");
    }
}

if (isset($_POST["change_password"])) {
    $userId = $_POST["user_id"];
    $newPassword = $_POST["new_password"];
    $confirmPassword = $_POST["confirm_password"];

    if ($newPassword != $confirmPassword) {
        array_push($danger, "Password does not match!");
    } else {
        $changepassword = $usersFacade->changePassword($newPassword, $userId);
        if ($changepassword) {
            array_push($success, "Password has been changed successfully!");
        }
    }
}

if (isset($_POST["deactivate_account"])) {
    $userId = $_POST["user_id"];

    $deactivateAccount = $usersFacade->deactivateAccount($userId);
    if ($deactivateAccount) {
        header("Location: logout");
    }
}

?>

<?php include realpath(__DIR__ . '/includes/layout/navbar.php') ?>
<div class="osahan-profile">
    <?php
    $fetchUserById = $usersFacade->fetchUserById($userId);
    while ($row = $fetchUserById->fetch(PDO::FETCH_ASSOC)) {
    ?>
        <div class="d-none">
            <div class="bg-primary border-bottom p-3 d-flex align-items-center">
                <a class="toggle togglew toggle-2" href="#"><span></span></a>
                <h4 class="fw-bold m-0 text-white">Profile</h4>
            </div>
        </div>
        <!-- profile -->
        <div class="container position-relative">
            <div class="py-5 osahan-profile row">
                <div class="col-md-4 mb-3">
                    <div class="bg-white rounded shadow-sm sticky_sidebar overflow-hidden">
                        <a href="profile">
                            <div class="d-flex align-items-center p-3">
                                <div class="left me-3">
                                    <img alt="#" src="https://ui-avatars.com/api/?name=<?= $name ?>" class="img-fluid rounded-circle header-user me-2 header-user">
                                </div>
                                <div class="right">
                                    <h6 class="mb-1 fw-bold text-primary"><?= $row["name"] ?></h6>
                                    <p class="text-muted m-0 small"><?= $row["email"] ?></p>
                                </div>
                            </div>
                        </a>
                        <div class="osahan-credits d-flex align-items-center p-3 bg-light">
                            <p class="m-0">Rapidodo Points</p>
                            <h5 class="m-0 ms-auto text-primary">&#8369; <?= $row["rapidodo_points"] ?></h5>
                        </div>
                        <!-- profile-details -->
                        <div class="bg-white profile-details">
                            <a data-bs-toggle="modal" data-bs-target="#addDeliveryAddresssModal" class="d-flex w-100 align-items-center border-bottom p-3">
                                <div class="left me-3">
                                    <h6 class="fw-bold mb-1 text-dark">Address</h6>
                                    <p class="small text-muted m-0">Set delivery address</p>
                                </div>
                                <div class="right ms-auto">
                                    <span class="fw-bold m-0"><i class="feather-plus-circle text-primary h6 m-0"></i></span>
                                </div>
                            </a>
                        </div>
                        <!-- My Addresses -->
                        <div class="osahan-credits d-flex align-items-center p-3 bg-light">
                            <p class="m-0">My Delivery Addresses</p>
                        </div>
                        <?php
                        $fetchAddressesById = $addressesFacade->fetchAddressesById($userId);
                        while ($address = $fetchAddressesById->fetch(PDO::FETCH_ASSOC)) {
                        ?>
                            <div class="bg-white profile-details">
                                <div class="d-flex w-100 align-items-center border-bottom p-3">
                                    <div class="left me-3">
                                        <?php if ($address["nickname"] == 'Home') { ?>
                                            <p class="mb-1 badge text-bg-success ms-auto"><i class="icofont-check-circled"></i> Home</p>
                                        <?php } else { ?>
                                            <p class="mb-1 badge text-bg-info ms-auto"><i class="icofont-check-circled"></i> Work</p>
                                        <?php } ?>
                                        <h6 class="fw-bold mb-0 text-dark"><?= $address["street_purok"] . ', ' . $address["barangay"] . ', ' . $address["municipality_city"] ?></h6>
                                        <p class="small text-muted m-0"><?= $address["landmark"] ?></p>
                                    </div>
                                    <div class="right ms-auto">
                                        <a href="delete-address?address_id=<?= $address["id"] ?>&user_id=<?= $userId ?>">
                                            <span class="fw-bold m-0"><i class="feather-x-circle h6 m-0"></i></span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                </div>
                <div class="col-md-8 mb-3">
                    <div class="rounded shadow-sm p-4 bg-white">
                        <h5 class="mb-4">My account</h5>
                        <?php include('errors.php'); ?>
                        <div id="edit_profile">
                            <div>
                                <form action="profile" method="post">
                                    <input type="hidden" name="user_id" value="<?= $userId ?>">
                                    <div class="form-group mb-3">
                                        <label class="pb-1">Name</label>
                                        <input type="text" class="form-control" value="<?= $row["name"] ?>" name="name" required>
                                    </div>
                                    <div class="form-group mb-3">
                                        <label class="pb-1">Mobile Number</label>
                                        <input type="number" class="form-control" value="<?= $row["mobile_number"] ?>" name="mobile_number" required maxlength="11" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);">
                                    </div>
                                    <div class="form-group mb-3">
                                        <label class="pb-1">Email</label>
                                        <input type="email" class="form-control" value="<?= $row["email"] ?>" disabled>
                                    </div>
                                    <div class="text-center">
                                        <button type="submit" class="btn bg-primary w-100" name="save_changes">Save Changes</button>
                                    </div>
                                </form>
                            </div>
                            <div class="additional">
                                <div class="change_password my-3">
                                    <a data-bs-toggle="modal" data-bs-target="#changePasswordModal" class="p-3 border rounded bg-white btn d-flex align-items-center">Change Password
                                        <i class="feather-arrow-right ms-auto"></i></a>
                                </div>
                                <div class="deactivate_account">
                                    <a data-bs-toggle="modal" data-bs-target="#deactivateAccountModal" class="p-3 border rounded bg-white btn d-flex align-items-center">Deactivate Account
                                        <i class="feather-arrow-right ms-auto"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php } ?>
</div>

<?php

include realpath(__DIR__ . '/includes/layout/footer.php');
include realpath(__DIR__ . '/includes/modals/add-delivery-address-modal.php');
include realpath(__DIR__ . '/includes/modals/deactivate-account-modal.php');
include realpath(__DIR__ . '/includes/modals/change-password-modal.php');

?>