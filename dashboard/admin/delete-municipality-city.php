<?php

include realpath(__DIR__ . '/../.././includes/layout/dashboard-header.php');

if (isset($_GET["municipality_city_id"])) {
    $municipalityCityId = $_GET["municipality_city_id"];
    $deleteMunicipalityCity = $municipalityCityFacade->deleteMunicipalityCity($municipalityCityId);
    if ($deleteMunicipalityCity) {
        header("Location: municipality-city");
    }
}