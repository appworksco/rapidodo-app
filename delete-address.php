<?php

include realpath(__DIR__ . '/includes/layout/header.php');

if (isset($_GET["address_id"]) && isset($_GET["user_id"])) {
    $addressId = $_GET["address_id"];
    $userId = $_GET["user_id"];
    $deleteAddress = $addressesFacade->deleteAddress($addressId, $userId);
    if ($deleteAddress) {
        header("Location: profile");
    }
}