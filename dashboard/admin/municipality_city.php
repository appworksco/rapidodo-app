<?php

include realpath(__DIR__ . '/../.././includes/layout/dashboard-header.php');

// Redirect user if user is not logged in
if ($userId == 0) {
    header('Location: signin');
}

?>

<div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full" data-sidebar-position="fixed" data-header-position="fixed">
    <?php include realpath(__DIR__ . '/../.././includes/layout/dashboard-sidebar.php') ?>
    <div class="body-wrapper">
        <?php include realpath(__DIR__ . '/../.././includes/layout/dashboard-navbar.php') ?>
        <div class="container-fluid">
            <div class="col-lg-12 d-flex align-items-stretch">
                <div class="card w-100">
                    <div class="card-body p-4">
                        <h5 class="card-title fw-semibold mb-4">Overview</h5>
                        <div class="table-responsive">
                            <table class="table text-nowrap mb-0 align-middle">
                                <thead class="text-dark fs-4">
                                    <tr>
                                        <th class="border-bottom-0">
                                            <h6 class="fw-semibold mb-0">Municipality / City</h6>
                                        </th>
                                        <th class="border-bottom-0">
                                            <h6 class="fw-semibold mb-0">Action</h6>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="border-bottom-0">
                                            <h6 class="fw-semibold mb-0">1</h6>
                                        </td>
                                        <td class="border-bottom-0">
                                            <h6 class="fw-semibold mb-1">Sunil Joshi</h6>
                                            <span class="fw-normal">Web Designer</span>
                                        </td>
                                    </tr>
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