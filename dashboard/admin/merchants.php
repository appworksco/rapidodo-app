<?php

include realpath(__DIR__ . '/../.././includes/layout/dashboard-header.php');

// Redirect user if user is not logged in
if (isset($_SESSION["user_id"]) == 0) {
    header('Location: signin');
}

if (isset($_POST["add_municipality_city"])) {
    $municipalityCity = $_POST["municipality_city"];
    $verifyMunicipalityCity = $municipalityCityFacade->verifyMunicipalityCity($municipalityCity);
    if ($verifyMunicipalityCity <= 0) {
        $addMunicipalityCity = $municipalityCityFacade->addMunicipalityCity($municipalityCity);
        if ($addMunicipalityCity) {
            array_push($success, "Municipality / City has been added successfully!");
        }
    } else {
        array_push($danger, "Municipality / City has already been taken!");
    }
}

?>

<style>
    #map {
        width: 100%;
        height: calc(70vh - 155px);
    }
</style>

<div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full" data-sidebar-position="fixed" data-header-position="fixed">
    <?php include realpath(__DIR__ . '/../.././includes/layout/dashboard-sidebar.php') ?>
    <div class="body-wrapper">
        <?php include realpath(__DIR__ . '/../.././includes/layout/dashboard-navbar.php') ?>
        <div class="container-fluid">
            <div class="col-lg-12 d-flex align-items-stretch">
                <div class="card w-100">
                    <?php include('../../errors.php'); ?>
                    <div class="card-body p-4">
                        <div class="d-flex justify-content-between">
                            <h5 class="card-title fw-semibold mb-4">Overview</h5>
                            <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addMerchantModal">Add Municipality / City</button>
                        </div>
                        <div class="table-responsive">
                            <table class="table text-nowrap mb-0 align-middle">
                                <thead class="text-dark fs-4">
                                    <tr>
                                        <th class="border-bottom-0">
                                            <h6 class="fw-semibold mb-0">Action</h6>
                                        </th>
                                        <th class="border-bottom-0">
                                            <h6 class="fw-semibold mb-0">Logo</h6>
                                        </th>
                                        <th class="border-bottom-0">
                                            <h6 class="fw-semibold mb-0">Merchant Name</h6>
                                        </th>
                                        <th class="border-bottom-0">
                                            <h6 class="fw-semibold mb-0">Municipality / City</h6>
                                        </th>
                                        <th class="border-bottom-0">
                                            <h6 class="fw-semibold mb-0">Location</h6>
                                        </th>
                                        <th class="border-bottom-0">
                                            <h6 class="fw-semibold mb-0">Mobile Number</h6>
                                        </th>
                                        <th class="border-bottom-0">
                                            <h6 class="fw-semibold mb-0">Username</h6>
                                        </th>
                                        <th class="border-bottom-0">
                                            <h6 class="fw-semibold mb-0">Password</h6>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $fetchMunicipalityCity = $municipalityCityFacade->fetchMunicipalityCity();
                                    foreach ($fetchMunicipalityCity as $fetchMunicipalityCity) { ?>
                                        <tr>
                                            <td class="border-bottom-0">
                                                <h6 class="fw-semibold mb-0"><?= $fetchMunicipalityCity["municipality_city"] ?></h6>
                                            </td>
                                            <td class="border-bottom-0">
                                                <a href="delete-municipality-city?municipality_city_id=<?= $fetchMunicipalityCity["id"] ?>" class="btn btn-danger">Delete</a>
                                            </td>
                                        </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="py-6 px-6 text-center">
                <p class="mb-0 fs-4">Powered by <a href="https://appworksco.com/" target="_blank" class="pe-1 text-primary text-decoration-underline">Appworks Co.</a></p>
            </div>
        </div>
    </div>
</div>

<?php include realpath(__DIR__ . '/../.././includes/layout/dashboard-footer.php') ?>
<?php include realpath(__DIR__ . '/../.././includes/modals/add-merchant-modal.php') ?>