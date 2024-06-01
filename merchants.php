<?php

include realpath(__DIR__ . '/includes/layout/header.php');

// Redirect user if user is not logged in
if (isset($_SESSION["user_id"]) == 0) {
    header('Location: signin');
}

$municipality_city = $_GET["municipality_city"];

?>

<?php include realpath(__DIR__ . '/includes/layout/navbar.php') ?>
<div class="d-none">
    <div class="bg-primary border-bottom p-3 d-flex align-items-center">
        <h4 class="fw-bold m-0 text-white"><?= $municipality_city ?></h4>
    </div>
</div>
<div class="osahan-home-page">
    <div class="container">
        <div class="pt-4 pb-2 title d-flex align-items-center">
            <h5 class="m-0">Most Popular</h5>
        </div>
        <div class="trending-slider">
            <div class="osahan-slider-item">
                <div class="list-card bg-white h-100 rounded overflow-hidden position-relative shadow-sm">
                    <div class="list-card-image">
                        <div class="star position-absolute"><span class="badge text-bg-success"><i class="feather-star"></i> 3.1 (300+)</span></div>
                        <div class="favourite-heart text-danger position-absolute rounded-circle"><a href="#"><i class="feather-heart"></i></a></div>
                        <div class="member-plan position-absolute"><span class="badge text-bg-dark">Promoted</span>
                        </div>
                        <a href="restaurant.html">
                            <img alt="#" src="img/trending1.png" class="img-fluid item-img w-100">
                        </a>
                    </div>
                    <div class="p-3 position-relative">
                        <div class="list-card-body">
                            <h6 class="mb-1"><a href="restaurant.html" class="text-black">Famous Dave's Bar-B-Que
                                </a>
                            </h6>
                            <p class="text-gray mb-3">Vegetarian • Indian • Pure veg</p>
                            <p class="text-gray mb-3 time"><span class="bg-light text-dark rounded-sm py-1 px-2"><i class="feather-clock"></i> 15–30 min</span> <span class="float-end text-black-50"> $350 FOR TWO</span></p>
                        </div>
                        <div class="list-card-badge">
                            <span class="badge text-bg-danger">OFFER</span> <small> Use Coupon OSAHAN50</small>
                        </div>
                    </div>
                </div>
            </div>
            <div class="osahan-slider-item">
                <div class="list-card bg-white h-100 rounded overflow-hidden position-relative shadow-sm">
                    <div class="list-card-image">
                        <div class="star position-absolute"><span class="badge text-bg-success"><i class="feather-star"></i> 3.1 (300+)</span></div>
                        <div class="favourite-heart text-danger position-absolute rounded-circle"><a href="#"><i class="feather-heart"></i></a></div>
                        <div class="member-plan position-absolute"><span class="badge text-bg-dark">Promoted</span>
                        </div>
                        <a href="restaurant.html">
                            <img alt="#" src="img/trending2.png" class="img-fluid item-img w-100">
                        </a>
                    </div>
                    <div class="p-3 position-relative">
                        <div class="list-card-body">
                            <h6 class="mb-1"><a href="restaurant.html" class="text-black">Thai Famous Cuisine</a>
                            </h6>
                            <p class="text-gray mb-3">North Indian • Indian • Pure veg</p>
                            <p class="text-gray mb-3 time"><span class="bg-light text-dark rounded-sm py-1 px-2"><i class="feather-clock"></i> 30–35 min</span> <span class="float-end text-black-50"> $250 FOR TWO</span></p>
                        </div>
                        <div class="list-card-badge">
                            <span class="badge text-bg-success">OFFER</span> <small>65% off</small>
                        </div>
                    </div>
                </div>
            </div>
            <div class="osahan-slider-item">
                <div class="list-card bg-white h-100 rounded overflow-hidden position-relative shadow-sm">
                    <div class="list-card-image">
                        <div class="star position-absolute"><span class="badge text-bg-success"><i class="feather-star"></i> 3.1 (300+)</span></div>
                        <div class="favourite-heart text-danger position-absolute rounded-circle"><a href="#"><i class="feather-heart"></i></a></div>
                        <div class="member-plan position-absolute"><span class="badge text-bg-dark">Promoted</span>
                        </div>
                        <a href="restaurant.html">
                            <img alt="#" src="img/trending3.png" class="img-fluid item-img w-100">
                        </a>
                    </div>
                    <div class="p-3 position-relative">
                        <div class="list-card-body">
                            <h6 class="mb-1"><a href="restaurant.html" class="text-black">The osahan Restaurant
                                </a>
                            </h6>
                            <p class="text-gray mb-3">North • Hamburgers • Pure veg</p>
                            <p class="text-gray mb-3 time"><span class="bg-light text-dark rounded-sm py-1 px-2"><i class="feather-clock"></i> 15–25 min</span> <span class="float-end text-black-50"> $500 FOR TWO</span></p>
                        </div>
                        <div class="list-card-badge">
                            <span class="badge text-bg-danger">OFFER</span> <small>65% OSAHAN50</small>
                        </div>
                    </div>
                </div>
            </div>
            <div class="osahan-slider-item">
                <div class="list-card bg-white h-100 rounded overflow-hidden position-relative shadow-sm">
                    <div class="list-card-image">
                        <div class="star position-absolute"><span class="badge text-bg-success"><i class="feather-star"></i> 3.1 (300+)</span></div>
                        <div class="favourite-heart text-danger position-absolute rounded-circle"><a href="#"><i class="feather-heart"></i></a></div>
                        <div class="member-plan position-absolute"><span class="badge text-bg-dark">Promoted</span>
                        </div>
                        <a href="restaurant.html">
                            <img alt="#" src="img/trending2.png" class="img-fluid item-img w-100">
                        </a>
                    </div>
                    <div class="p-3 position-relative">
                        <div class="list-card-body">
                            <h6 class="mb-1"><a href="restaurant.html" class="text-black">Thai Famous Cuisine</a>
                            </h6>
                            <p class="text-gray mb-3">North Indian • Indian • Pure veg</p>
                            <p class="text-gray mb-3 time"><span class="bg-light text-dark rounded-sm py-1 px-2"><i class="feather-clock"></i> 30–35 min</span> <span class="float-end text-black-50"> $250 FOR TWO</span></p>
                        </div>
                        <div class="list-card-badge">
                            <span class="badge text-bg-success">OFFER</span> <small>65% off</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="py-3 title d-flex align-items-center">
            <h5 class="m-0">Merchants</h5>
        </div>
        <div class="most_popular">
            <div class="row">
                <div class="col-md-3 pb-3">
                    <div class="list-card bg-white h-100 rounded overflow-hidden position-relative shadow-sm">
                        <div class="list-card-image">
                            <div class="star position-absolute"><span class="badge text-bg-success"><i class="feather-star"></i> 3.1 (300+)</span></div>
                            <div class="favourite-heart text-danger position-absolute rounded-circle"><a href="#"><i class="feather-heart"></i></a></div>
                            <div class="member-plan position-absolute"><span class="badge text-bg-dark">Promoted</span></div>
                            <a href="restaurant.html">
                                <img alt="#" src="img/popular1.png" class="img-fluid item-img w-100">
                            </a>
                        </div>
                        <div class="p-3 position-relative">
                            <div class="list-card-body">
                                <h6 class="mb-1"><a href="restaurant.html" class="text-black">The osahan Restaurant
                                    </a>
                                </h6>
                                <p class="text-gray mb-1 small">• North • Hamburgers</p>
                                <p class="text-gray mb-1 rating">
                                </p>
                                <ul class="rating-stars list-unstyled">
                                    <li>
                                        <i class="feather-star star_active"></i>
                                        <i class="feather-star star_active"></i>
                                        <i class="feather-star star_active"></i>
                                        <i class="feather-star star_active"></i>
                                        <i class="feather-star"></i>
                                    </li>
                                </ul>
                                <p></p>
                            </div>
                            <div class="list-card-badge">
                                <span class="badge text-bg-danger">OFFER</span> <small>65% OSAHAN50</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 pb-3">
                    <div class="list-card bg-white h-100 rounded overflow-hidden position-relative shadow-sm">
                        <div class="list-card-image">
                            <div class="star position-absolute"><span class="badge text-bg-success"><i class="feather-star"></i> 3.1 (300+)</span></div>
                            <div class="favourite-heart text-danger position-absolute rounded-circle"><a href="#"><i class="feather-heart"></i></a></div>
                            <div class="member-plan position-absolute"><span class="badge text-bg-dark">Promoted</span></div>
                            <a href="restaurant.html">
                                <img alt="#" src="img/popular2.png" class="img-fluid item-img w-100">
                            </a>
                        </div>
                        <div class="p-3 position-relative">
                            <div class="list-card-body">
                                <h6 class="mb-1"><a href="restaurant.html" class="text-black">Thai Famous Indian
                                        Cuisine</a></h6>
                                <p class="text-gray mb-1 small">• Indian • Pure veg</p>
                                <p class="text-gray mb-1 rating">
                                </p>
                                <ul class="rating-stars list-unstyled">
                                    <li>
                                        <i class="feather-star star_active"></i>
                                        <i class="feather-star star_active"></i>
                                        <i class="feather-star star_active"></i>
                                        <i class="feather-star star_active"></i>
                                        <i class="feather-star"></i>
                                    </li>
                                </ul>
                                <p></p>
                            </div>
                            <div class="list-card-badge">
                                <span class="badge text-bg-success">OFFER</span> <small>65% off</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 pb-3">
                    <div class="list-card bg-white h-100 rounded overflow-hidden position-relative shadow-sm">
                        <div class="list-card-image">
                            <div class="star position-absolute"><span class="badge text-bg-success"><i class="feather-star"></i> 3.1 (300+)</span></div>
                            <div class="favourite-heart text-danger position-absolute rounded-circle"><a href="#"><i class="feather-heart"></i></a></div>
                            <div class="member-plan position-absolute"><span class="badge text-bg-dark">Promoted</span></div>
                            <a href="restaurant.html">
                                <img alt="#" src="img/popular3.png" class="img-fluid item-img w-100">
                            </a>
                        </div>
                        <div class="p-3 position-relative">
                            <div class="list-card-body">
                                <h6 class="mb-1"><a href="restaurant.html" class="text-black">The osahan Restaurant
                                    </a>
                                </h6>
                                <p class="text-gray mb-1 small">• Hamburgers • Pure veg</p>
                                <p class="text-gray mb-1 rating">
                                </p>
                                <ul class="rating-stars list-unstyled">
                                    <li>
                                        <i class="feather-star star_active"></i>
                                        <i class="feather-star star_active"></i>
                                        <i class="feather-star star_active"></i>
                                        <i class="feather-star star_active"></i>
                                        <i class="feather-star"></i>
                                    </li>
                                </ul>
                                <p></p>
                            </div>
                            <div class="list-card-badge">
                                <span class="badge text-bg-danger">OFFER</span> <small>65% OSAHAN50</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 pb-3">
                    <div class="list-card bg-white h-100 rounded overflow-hidden position-relative shadow-sm">
                        <div class="list-card-image">
                            <div class="star position-absolute"><span class="badge text-bg-success"><i class="feather-star"></i> 3.1 (300+)</span></div>
                            <div class="favourite-heart text-danger position-absolute rounded-circle"><a href="#"><i class="feather-heart"></i></a></div>
                            <div class="member-plan position-absolute"><span class="badge text-bg-dark">Promoted</span></div>
                            <a href="restaurant.html">
                                <img alt="#" src="img/popular4.png" class="img-fluid item-img w-100">
                            </a>
                        </div>
                        <div class="p-3 position-relative">
                            <div class="list-card-body">
                                <h6 class="mb-1"><a href="restaurant.html" class="text-black">Bite Me Now
                                        Sandwiches</a></h6>
                                <p class="text-gray mb-1 small">American • Pure veg</p>
                                <p class="text-gray mb-1 rating">
                                </p>
                                <ul class="rating-stars list-unstyled">
                                    <li>
                                        <i class="feather-star star_active"></i>
                                        <i class="feather-star star_active"></i>
                                        <i class="feather-star star_active"></i>
                                        <i class="feather-star star_active"></i>
                                        <i class="feather-star"></i>
                                    </li>
                                </ul>
                                <p></p>
                            </div>
                            <div class="list-card-badge">
                                <span class="badge text-bg-success">OFFER</span> <small>65% off</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3 pb-3">
                    <div class="list-card bg-white h-100 rounded overflow-hidden position-relative shadow-sm">
                        <div class="list-card-image">
                            <div class="star position-absolute"><span class="badge text-bg-success"><i class="feather-star"></i> 3.1 (300+)</span></div>
                            <div class="favourite-heart text-danger position-absolute rounded-circle"><a href="#"><i class="feather-heart"></i></a></div>
                            <div class="member-plan position-absolute"><span class="badge text-bg-dark">Promoted</span></div>
                            <a href="restaurant.html">
                                <img alt="#" src="img/popular5.png" class="img-fluid item-img w-100">
                            </a>
                        </div>
                        <div class="p-3 position-relative">
                            <div class="list-card-body">
                                <h6 class="mb-1"><a href="restaurant.html" class="text-black">The osahan Restaurant
                                    </a>
                                </h6>
                                <p class="text-gray mb-1 small">• North • Hamburgers</p>
                                <p class="text-gray mb-1 rating">
                                </p>
                                <ul class="rating-stars list-unstyled">
                                    <li>
                                        <i class="feather-star star_active"></i>
                                        <i class="feather-star star_active"></i>
                                        <i class="feather-star star_active"></i>
                                        <i class="feather-star star_active"></i>
                                        <i class="feather-star"></i>
                                    </li>
                                </ul>
                                <p></p>
                            </div>
                            <div class="list-card-badge">
                                <span class="badge text-bg-danger">OFFER</span> <small>65% OSAHAN50</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 pb-3">
                    <div class="list-card bg-white h-100 rounded overflow-hidden position-relative shadow-sm">
                        <div class="list-card-image">
                            <div class="star position-absolute"><span class="badge text-bg-success"><i class="feather-star"></i> 3.1 (300+)</span></div>
                            <div class="favourite-heart text-danger position-absolute rounded-circle"><a href="#"><i class="feather-heart"></i></a></div>
                            <div class="member-plan position-absolute"><span class="badge text-bg-dark">Promoted</span></div>
                            <a href="restaurant.html">
                                <img alt="#" src="img/popular6.png" class="img-fluid item-img w-100">
                            </a>
                        </div>
                        <div class="p-3 position-relative">
                            <div class="list-card-body">
                                <h6 class="mb-1"><a href="restaurant.html" class="text-black">Thai Famous Indian
                                        Cuisine</a></h6>
                                <p class="text-gray mb-1 small">• Indian • Pure veg</p>
                                <p class="text-gray mb-1 rating">
                                </p>
                                <ul class="rating-stars list-unstyled">
                                    <li>
                                        <i class="feather-star star_active"></i>
                                        <i class="feather-star star_active"></i>
                                        <i class="feather-star star_active"></i>
                                        <i class="feather-star star_active"></i>
                                        <i class="feather-star"></i>
                                    </li>
                                </ul>
                                <p></p>
                            </div>
                            <div class="list-card-badge">
                                <span class="badge text-bg-success">OFFER</span> <small>65% off</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 pb-3">
                    <div class="list-card bg-white h-100 rounded overflow-hidden position-relative shadow-sm">
                        <div class="list-card-image">
                            <div class="star position-absolute"><span class="badge text-bg-success"><i class="feather-star"></i> 3.1 (300+)</span></div>
                            <div class="favourite-heart text-danger position-absolute rounded-circle"><a href="#"><i class="feather-heart"></i></a></div>
                            <div class="member-plan position-absolute"><span class="badge text-bg-dark">Promoted</span></div>
                            <a href="restaurant.html">
                                <img alt="#" src="img/popular7.png" class="img-fluid item-img w-100">
                            </a>
                        </div>
                        <div class="p-3 position-relative">
                            <div class="list-card-body">
                                <h6 class="mb-1"><a href="restaurant.html" class="text-black">The osahan Restaurant
                                    </a>
                                </h6>
                                <p class="text-gray mb-1 small">• Hamburgers • Pure veg</p>
                                <p class="text-gray mb-1 rating">
                                </p>
                                <ul class="rating-stars list-unstyled">
                                    <li>
                                        <i class="feather-star star_active"></i>
                                        <i class="feather-star star_active"></i>
                                        <i class="feather-star star_active"></i>
                                        <i class="feather-star star_active"></i>
                                        <i class="feather-star"></i>
                                    </li>
                                </ul>
                                <p></p>
                            </div>
                            <div class="list-card-badge">
                                <span class="badge text-bg-danger">OFFER</span> <small>65% OSAHAN50</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 pb-3">
                    <div class="list-card bg-white h-100 rounded overflow-hidden position-relative shadow-sm">
                        <div class="list-card-image">
                            <div class="star position-absolute"><span class="badge text-bg-success"><i class="feather-star"></i> 3.1 (300+)</span></div>
                            <div class="favourite-heart text-danger position-absolute rounded-circle"><a href="#"><i class="feather-heart"></i></a></div>
                            <div class="member-plan position-absolute"><span class="badge text-bg-dark">Promoted</span></div>
                            <a href="restaurant.html">
                                <img alt="#" src="img/popular8.png" class="img-fluid item-img w-100">
                            </a>
                        </div>
                        <div class="p-3 position-relative">
                            <div class="list-card-body">
                                <h6 class="mb-1"><a href="restaurant.html" class="text-black">Bite Me Now
                                        Sandwiches</a></h6>
                                <p class="text-gray mb-1 small">American • Pure veg</p>
                                <p class="text-gray mb-1 rating">
                                </p>
                                <ul class="rating-stars list-unstyled">
                                    <li>
                                        <i class="feather-star star_active"></i>
                                        <i class="feather-star star_active"></i>
                                        <i class="feather-star star_active"></i>
                                        <i class="feather-star star_active"></i>
                                        <i class="feather-star"></i>
                                    </li>
                                </ul>
                                <p></p>
                            </div>
                            <div class="list-card-badge">
                                <span class="badge text-bg-success">OFFER</span> <small>65% off</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="pt-2 pb-3 title d-flex align-items-center">
            <h5 class="m-0">Most sales</h5>
            <a class="fw-bold ms-auto" href="#">26 places <i class="feather-chevrons-right"></i></a>
        </div>
        <div class="most_sale">
            <div class="row mb-3">
                <div class="col-md-4 mb-3">
                    <div class="d-flex align-items-center list-card bg-white h-100 rounded overflow-hidden position-relative shadow-sm">
                        <div class="list-card-image">
                            <div class="star position-absolute"><span class="badge text-bg-success"><i class="feather-star"></i> 3.1 (300+)</span></div>
                            <div class="favourite-heart text-danger position-absolute rounded-circle"><a href="#"><i class="feather-heart"></i></a></div>
                            <div class="member-plan position-absolute"><span class="badge text-bg-dark">Promoted</span></div>
                            <a href="restaurant.html">
                                <img alt="#" src="img/sales1.png" class="img-fluid item-img w-100">
                            </a>
                        </div>
                        <div class="p-3 position-relative">
                            <div class="list-card-body">
                                <h6 class="mb-1"><a href="restaurant.html" class="text-black">The osahan Restaurant
                                    </a>
                                </h6>
                                <p class="text-gray mb-3">North • Hamburgers • Pure veg</p>
                                <p class="text-gray mb-3 time"><span class="bg-light text-dark rounded-sm py-1 px-2"><i class="feather-clock"></i> 15–25 min</span> <span class="float-end text-black-50"> $500 FOR TWO</span></p>
                            </div>
                            <div class="list-card-badge">
                                <span class="badge text-bg-danger">OFFER</span> <small>65% OSAHAN50</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <div class="d-flex align-items-center list-card bg-white h-100 rounded overflow-hidden position-relative shadow-sm">
                        <div class="list-card-image">
                            <div class="star position-absolute"><span class="badge text-bg-success"><i class="feather-star"></i> 3.1 (300+)</span></div>
                            <div class="favourite-heart text-danger position-absolute rounded-circle"><a href="#"><i class="feather-heart"></i></a></div>
                            <div class="member-plan position-absolute"><span class="badge text-bg-dark">Promoted</span></div>
                            <a href="restaurant.html">
                                <img alt="#" src="img/sales2.png" class="img-fluid item-img w-100">
                            </a>
                        </div>
                        <div class="p-3 position-relative">
                            <div class="list-card-body">
                                <h6 class="mb-1"><a href="restaurant.html" class="text-black">Thai Famous
                                        Cuisine</a></h6>
                                <p class="text-gray mb-3">North Indian • Indian • Pure veg</p>
                                <p class="text-gray mb-3 time"><span class="bg-light text-dark rounded-sm py-1 px-2"><i class="feather-clock"></i> 30–35 min</span> <span class="float-end text-black-50"> $250 FOR TWO</span></p>
                            </div>
                            <div class="list-card-badge">
                                <span class="badge text-bg-success">OFFER</span> <small>65% off</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <div class="d-flex align-items-center list-card bg-white h-100 rounded overflow-hidden position-relative shadow-sm">
                        <div class="list-card-image">
                            <div class="star position-absolute"><span class="badge text-bg-success"><i class="feather-star"></i> 3.1 (300+)</span></div>
                            <div class="favourite-heart text-danger position-absolute rounded-circle"><a href="#"><i class="feather-heart"></i></a></div>
                            <div class="member-plan position-absolute"><span class="badge text-bg-dark">Promoted</span></div>
                            <a href="restaurant.html">
                                <img alt="#" src="img/sales3.png" class="img-fluid item-img w-100">
                            </a>
                        </div>
                        <div class="p-3 position-relative">
                            <div class="list-card-body">
                                <h6 class="mb-1"><a href="restaurant.html" class="text-black">The osahan Restaurant
                                    </a>
                                </h6>
                                <p class="text-gray mb-3">North • Hamburgers • Pure veg</p>
                                <p class="text-gray mb-3 time"><span class="bg-light text-dark rounded-sm py-1 px-2"><i class="feather-clock"></i> 15–25 min</span> <span class="float-end text-black-50"> $500 FOR TWO</span></p>
                            </div>
                            <div class="list-card-badge">
                                <span class="badge text-bg-danger">OFFER</span> <small>65% OSAHAN50</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include realpath(__DIR__ . '/includes/layout/footer.php') ?>