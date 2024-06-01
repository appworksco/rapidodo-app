<?php

include realpath(__DIR__ . '/includes/layout/header.php');

// Redirect user if user is not logged in
if (isset($_SESSION["user_id"]) == 0) {
    header('Location: signin');
}

?>

<?php include realpath(__DIR__ . '/includes/layout/navbar.php') ?>
<div class="d-none">
    <div class="bg-primary border-bottom p-3 d-flex align-items-center">
        <h4 class="fw-bold m-0 text-white">Municipality / Cities</h4>
    </div>
</div>
<div class="container">
    <div class="pt-4 pb-2 title d-flex align-items-center">
        <h5 class="m-0">Where would you like to order from?</h5>
    </div>
    <div class="row">
        <?php
        $fetchMunicipalityCity = $municipalityCityFacade->fetchMunicipalityCity();
        foreach ($fetchMunicipalityCity as $fetchMunicipalityCity) { ?>
            <div class="col-md-4 mb-2">
                <div class="list-card bg-white h-100 rounded overflow-hidden position-relative shadow-sm grid-card">
                    <div class="list-card-image">
                        <a href="merchants?municipality_city=<?= $fetchMunicipalityCity["municipality_city"] ?>">
                            <h5 class="m-0 p-4 mx-1"><?= $fetchMunicipalityCity["municipality_city"] ?></h5>
                        </a>
                    </div>
                </div>
            </div>
        <?php } ?>
    </div>
</div>

<?php include realpath(__DIR__ . '/includes/layout/footer.php') ?>