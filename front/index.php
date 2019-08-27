<?php

include_once($_SERVER['DOCUMENT_ROOT'] . '/teamextreme-project/vendor/autoload.php');

session_start();

if( array_key_exists('guest', $_SESSION) && !empty($_SESSION['guest'])){

}else{
    $_SESSION['guest'] = 'XP_'.rand(111111,999999).'_'.time();
}
$guest = $_SESSION['guest'];
echo $guest;

use team_extreme\Utility\Utility;
?>
<!doctype html>
<html lang="en">
<?php
include_once(Utility::getFrontElement("head.php"));
?>

<body>
    <!-- Markup for header -->
    <?php
    include_once(Utility::getFrontElement("header.php"));
    ?>

    <!-- Markup for Slider -->
    <div class="sliderSec">
        <div class="container-fluid">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="d-block w-100" src="<?= Utility::FrontAseets ?>img/sliderImg-1.jpg" alt="First slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="<?= Utility::FrontAseets ?>img/sliderImg-1.jpg" alt="Second slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="<?= Utility::FrontAseets ?>img/sliderImg-1.jpg" alt="Third slide">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </div>
    <!-- //Markup for Slider -->

    <!-- Markup for service Section-->
    <div class="servicesSec">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 serviceItem">
                    <div class="card">
                        <div class="card-block card-1">
                            <h3 class="card-title">Special title</h3>
                            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                            <a href="#" title="Read more" class="read-more">Read more <i class="fa fa-angle-double-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 serviceItem">
                    <div class="card">
                        <div class="card-block card-2">
                            <h3 class="card-title">Special title</h3>
                            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                            <a href="#" title="Read more" class="read-more">Read more <i class="fa fa-angle-double-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 serviceItem">
                    <div class="card">
                        <div class="card-block card-3">
                            <h3 class="card-title">Special title</h3>
                            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                            <a href="#" title="Read more">Read more <i class="fa fa-angle-double-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 serviceItem">
                    <div class="card">
                        <div class="card-block card-4">
                            <h3 class="card-title">Special title</h3>
                            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                            <a href="#" title="Read more" class="read-more">Read more <i class="fa fa-angle-double-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- //Markup for service Section-->

    <!-- Markup for Product Display Section-->
    <div class="productDisplaySec">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="productType text-center">
                        <div class="btn-group" role="group" aria-label="Basic example">
                            <button type="button" class="btn">Featured</button>
                            <button type="button" class="btn">New Item</button>
                            <button type="button" class="btn">Top Seller</button>
                            <button type="button" class="btn">Top Ratting</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="singleProduct">
                        <div class="card">
                            <div class="cardImg">
                                <img class="card-img-top img-fluid" src="<?= Utility::FrontAseets ?>img/desktop-2.jpg">
                            </div>
                            <div class="cardContent text-center">
                                <div class="card-body">
                                    <h4 class="productTitle">Apple Pc</h4>
                                    <p class="price"><del>$1000</del><span>$8000</span></p>
                                    <div class="productRating">
                                        <span><i class="fa fa-star"></i></span>
                                        <span><i class="fa fa-star"></i></span>
                                        <span><i class="fa fa-star"></i></span>
                                        <span><i class="fa fa-star"></i></span>
                                        <span><i class="fa fa-star-half-o"></i></span>
                                    </div>
                                    <div class="cardHover">
                                        <button class="btn"><i class="fa fa-cart"></i>Add to Cart</button>
                                        <button class="btn"><i class="fa fa-edit"></i></button>
                                        <button class="btn"><i class="fa fa-exchange"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="singleProduct">
                        <div class="card">
                            <div class="cardImg">
                                <img class="card-img-top img-fluid" src="<?= Utility::FrontAseets ?>img/mobile-2.jpg">
                            </div>
                            <div class="cardContent text-center">
                                <div class="card-body">
                                    <h4 class="productTitle">Smart Phone Primo V1</h4>
                                    <p class="price"><del>$1000</del><span>$8000</span></p>
                                    <div class="productRating">
                                        <span><i class="fa fa-star"></i></span>
                                        <span><i class="fa fa-star"></i></span>
                                        <span><i class="fa fa-star"></i></span>
                                        <span><i class="fa fa-star"></i></span>
                                        <span><i class="fa fa-star-half-o"></i></span>
                                    </div>
                                    <div class="cardHover">
                                        <button class="btn"><i class="fa fa-cart"></i>Add to Cart</button>
                                        <button class="btn"><i class="fa fa-edit"></i></button>
                                        <button class="btn"><i class="fa fa-exchange"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="singleProduct">
                        <div class="card">
                            <div class="cardImg">
                                <img class="card-img-top img-fluid" src="<?= Utility::FrontAseets ?>img/laptop-2.jpg">
                            </div>
                            <div class="cardContent text-center">
                                <div class="card-body">
                                    <h4 class="productTitle">Asus TUF</h4>
                                    <p class="price"><del>$1000</del><span>$8000</span></p>
                                    <div class="productRating">
                                        <span><i class="fa fa-star"></i></span>
                                        <span><i class="fa fa-star"></i></span>
                                        <span><i class="fa fa-star"></i></span>
                                        <span><i class="fa fa-star"></i></span>
                                        <span><i class="fa fa-star-half-o"></i></span>
                                    </div>
                                    <div class="cardHover">
                                        <button class="btn"><i class="fa fa-cart"></i>Add to Cart</button>
                                        <button class="btn"><i class="fa fa-edit"></i></button>
                                        <button class="btn"><i class="fa fa-exchange"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="singleProduct">
                        <div class="card">
                            <div class="cardImg">
                                <img class="card-img-top img-fluid" src="<?= Utility::FrontAseets ?>img/mobile-1.jpg">
                            </div>
                            <div class="cardContent text-center">
                                <div class="card-body">
                                    <h4 class="productTitle">Asus ZenPhone</h4>
                                    <p class="price"><del>$1000</del><span>$8000</span></p>
                                    <div class="productRating">
                                        <span><i class="fa fa-star"></i></span>
                                        <span><i class="fa fa-star"></i></span>
                                        <span><i class="fa fa-star"></i></span>
                                        <span><i class="fa fa-star"></i></span>
                                        <span><i class="fa fa-star-half-o"></i></span>
                                    </div>
                                    <div class="cardHover">
                                        <button class="btn"><i class="fa fa-cart"></i>Add to Cart</button>
                                        <button class="btn"><i class="fa fa-edit"></i></button>
                                        <button class="btn"><i class="fa fa-exchange"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="singleProduct">
                        <div class="card">
                            <div class="cardImg">
                                <img class="card-img-top img-fluid" src="<?= Utility::FrontAseets ?>img/desktop-1.jpg">
                            </div>
                            <div class="cardContent text-center">
                                <div class="card-body">
                                    <h4 class="productTitle">Dell Brand Pc</h4>
                                    <p class="price"><del>$1000</del><span>$8000</span></p>
                                    <div class="productRating">
                                        <span><i class="fa fa-star"></i></span>
                                        <span><i class="fa fa-star"></i></span>
                                        <span><i class="fa fa-star"></i></span>
                                        <span><i class="fa fa-star"></i></span>
                                        <span><i class="fa fa-star-half-o"></i></span>
                                    </div>
                                    <div class="cardHover">
                                        <button class="btn"><i class="fa fa-cart"></i>Add to Cart</button>
                                        <button class="btn"><i class="fa fa-edit"></i></button>
                                        <button class="btn"><i class="fa fa-exchange"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="singleProduct">
                        <div class="card">
                            <div class="cardImg">
                                <img class="card-img-top img-fluid" src="<?= Utility::FrontAseets ?>img/laptop-1.jpg">
                            </div>
                            <div class="cardContent text-center">
                                <div class="card-body">
                                    <h4 class="productTitle">Asus ROG Strix</h4>
                                    <p class="price"><del>$1000</del><span>$8000</span></p>
                                    <div class="productRating">
                                        <span><i class="fa fa-star"></i></span>
                                        <span><i class="fa fa-star"></i></span>
                                        <span><i class="fa fa-star"></i></span>
                                        <span><i class="fa fa-star"></i></span>
                                        <span><i class="fa fa-star-half-o"></i></span>
                                    </div>
                                    <div class="cardHover">
                                        <button class="btn"><i class="fa fa-cart"></i>Add to Cart</button>
                                        <button class="btn"><i class="fa fa-edit"></i></button>
                                        <button class="btn"><i class="fa fa-exchange"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- //Markup for Product Display Section-->

    <!-- Promotion Section -->
    <div class="promotionSec">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="promoImg">
                        <img src="<?= Utility::FrontAseets ?>img/offerImg.jpg" alt="Promotion Image" class="img-fluid">
                        <div class="promoPrice rounded-circle">
                            <p><del class="d-block align-middle">$1000</del>
                                <span>$500</span></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="promoContent">
                        <h2 class="promoTitle">50% OFF<small class="d-block">For walton primo</small></h2>
                        <span>Lorem ipsum dolor sit amet.</span>
                        <p class="text-justify">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum dolores animi rem velit facere eius maxime adipisci, corporis dolore odio.
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum dolores animi rem velit facere eius maxime adipisci, corporis dolore odio.
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum dolores animi rem velit facere eius maxime adipisci, corporis dolore odio.
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum dolores animi rem velit facere eius maxime adipisci, corporis dolore odio.
                        </p>
                        <div class="promoTime">
                            <ol>
                                <li class="btn"><span class="d-block" id="showDays"></span>Days</li>
                                <li class="btn"><span class="d-block" id="showHours"></span>Hours</li>
                                <li class="btn"><span class="d-block" id="showMinutes"></span>Minutes</li>
                                <li class="btn"><span class="d-block" id="showSeconds"></span>Seconds</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- //Promotion Section -->

    <!-- Subscription Form -->
    <div class="subscriptionSec">
        <div class="container">
            <div class="row">
                <div class="col-md-6 offset-md-3">
                    <h2 class="subcriptionTitle text-center">Subcribe for Get Offer</h2>
                    <p class="text-center">Lorem ipsum dolor sit amet.</p>
                    <div class="input-group">
                        <input type="email" name="subEmail" class="form-control" placeholder="Type your Email">
                        <div class="input-group-append">
                            <button class="btn" type="submit">Let's Go!</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- //Subscription Form -->

    <!-- Brand Section -->
    <div class="brandSec">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h4 class="text-center">Our Brand</h4>
                </div>
            </div>
            <div class="row">
                <div class="col-md-2">
                    <div class="card singleBrand">
                        <img class="card-img-top img-fluid" src="<?= Utility::FrontAseets ?>img/brand-1.jpg">
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="card singleBrand">
                        <img class="card-img-top img-fluid" src="<?= Utility::FrontAseets ?>img/brand-2.jpg">
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="card singleBrand">
                        <img class="card-img-top img-fluid" src="<?= Utility::FrontAseets ?>img/brand-3.jpg">
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="card singleBrand">
                        <img class="card-img-top img-fluid" src="<?= Utility::FrontAseets ?>img/brand-4.jpg">
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="card singleBrand">
                        <img class="card-img-top img-fluid" src="<?= Utility::FrontAseets ?>img/brand-5.jpg">
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="card singleBrand">
                        <img class="card-img-top img-fluid" src="<?= Utility::FrontAseets ?>img/brand-6.jpg">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- //Brand Section -->

    <!-- Footer Section -->
    <?php
    include_once(Utility::getFrontElement("footer.php"));
    ?>

    <!-- Optional JavaScript -->
    <?php
    include_once(Utility::getFrontElement("scripts.php"));
    ?>
</body>

</html>