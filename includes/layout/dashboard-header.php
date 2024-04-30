<?php

// Start session management and output buffering
session_start(); // Commence session management
ob_start(); // Activate output buffering

// Array to store invalid and success messages
$success = array(); // Array to hold success messages
$danger = array(); // Array to hold danger messages
$warning = array(); // Array to hold warning messages
$info = array(); // Array to hold info messages

include(__DIR__ . '/../../db/connector.php');
include(__DIR__ . '/../../includes/models/users-facade.php');
include(__DIR__ . '/../../includes/models/addresses-facade.php');

// Initialize the facade classes
$usersFacade = new UsersFacade;
$addressesFacade = new AddressesFacade;

$userId = 0; // Set default value for user id

// Get user credentials after signed in
if (isset($_SESSION["user_id"])) {
    $userId = $_SESSION["user_id"];
}
if (isset($_SESSION["name"])) {
    $name = $_SESSION["name"];
}
if (isset($_SESSION["email"])) {
    $email = $_SESSION["email"];
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Appworks Co.">
    <!-- Custom styles for this template -->
    <link rel="stylesheet" href="../.././dist/css/custom.css">
    <link rel="stylesheet" href="../.././dist/css/dashboard.css">
    <title>Rapidodo | Dashboard</title>
</head>

<body>