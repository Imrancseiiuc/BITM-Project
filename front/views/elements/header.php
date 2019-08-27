<?php
include_once($_SERVER["DOCUMENT_ROOT"] . "/teamextreme-project/vendor/autoload.php");

use team_extreme\Utility\Utility;
use team_extreme\DataBase\Db;
use team_extreme\Cart\Cart;

Db::connect();
$cart=new Cart();
$carts=$cart->cartList();

?>

<div class="headerSec">
    <div class="topNav">
        <nav class="navbar-expand-sm">
            <div class="container navbar-collapse">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="<?= Utility::FronWebUrl ?>index.php"><i class="fa fa-home"></i> Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"><i class="fa fa-user"></i> My Account</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"><i class="fa fa-shopping-cart" aria-hidden="true"></i> Shopping Cart</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"><i class="fa fa-check"></i> Checkout</a>
                    </li>
                </ul>
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <select class="custom-select">
                            <option>US</option>
                            <option>UK</option>
                            <option>Bangladesh</option>
                            <option>India</option>
                            <option>Pakistan</option>
                        </select>
                    </li>
                    <li class="nav-item">
                        <select class="custom-select">
                            <option><i class="fa fa-dollar"></i>Dollar</option>
                            <option><i class="fa fa-"></i>Taka</option>
                            <option><i class="fa fa-euro"></i>Euro</option>
                            <option><i class="fa fa-pound-sign"></i>Pound</option>
                            <option><i class="fa fa-rupee"></i>Rupee</option>
                        </select>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
    <div class="midNav">
        <nav class="navbar navbar-expand-sm">
            <div class="container">
                <a class="navbar-brand" href="<?= Utility::FronWebUrl ?>index.php">
                    <h3 class="p-1">Team Extreme</h3>
                </a>
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">Login</li>
                    <li class="nav-item">Creat Account</li>
                    <li class="nav-item">
                        <i class="fa fa-edit"></i>
                    </li>
                    <li class="nav-item cart">
                        <span class="miniCart" id="miniCart">
                            <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                            <span class="value text-danger"><?= count($carts) ?></span>

                        </span>
                        <div class="cartItem" id="cartBox">
                            <div class="card">
                                <div class="card-header bg-dark text-light">
                                    <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                    Shopping Cart
                                    <button id="cartClose" class=" btn btn-danger pull-right">x</button>
                                </div>
                                <?php
                                foreach ($carts as $row) :
                                    ?>
                                    <div class="card-body">

                                        <div class="row" id="singleCartProduct">
                                            <div class="col-xs-2 col-md-2 cartProductImg">
                                                <img class="img-responsive" src="<?= "http://localhost/teamextreme-project/public/upload/" ?><?= $row['picture'] ?>" alt="preview">
                                            </div>
                                            <div class="col-xs-4 col-md-8">
                                                <div class="row pb-2">
                                                    <div class="cartProductTitle">
                                                        <a href="#"><?php echo $row['product_title'] ?></a>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-xs-6 col-md-4 text-center" style="padding-top: 5px">
                                                        <p>
                                                            ৳<strong id="cartProductUnitPrice"><?php echo $row['unit_price'] ?></strong>
                                                            <span class="pl-2 text-muted">x</span>
                                                        </p>

                                                    </div>
                                                    <div class="col-xs-4 col-md-4 test">
                                                        <input type="text" class="form-control input-sm" value="<?php echo $row['qty'] ?>" id="cartProductQty">
                                                    </div>
                                                    <div class="col-xs-4 col-md-4">
                                                        <input type="text" class="form-control input-sm" readonly value="" id="cartProductSubTotal">
                                                    </div>
                                                </div>


                                            </div>
                                            <div class="col-xs-6 col-md-2 my-auto">


                                                <div class="col-xs-2 col-md-2">
                                                    <a href="<?= Utility::AdminWebView ?>cart/delete.php?delete=<?php
                                                                                                                echo $row['id'];
                                                                                                                ?>" class="btn-danger rounded px-1 mx-1"><i class="fa fa-trash"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <hr>

                                    </div>
                                <?php
                                endforeach;
                                ?>
                                <div class="card-footer">
                                    <div class="pull-left">
                                        <a href="<?= Utility::FrontWebView . "products/myCart.php" ?>" class="btn btn-outline-secondary pull-right">View and Edit Shopping</a>
                                    </div>
                                    <a href="#" class="btn btn-success pull-right">Checkout</a>
                                    <div class="pull-right" style="margin: 5px">
                                        <p class="pr-3" id="cartTotalPrice">Total: <b>50.00€</b></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
    <div class="menuBar">
        <nav class="navbar navbar-expand-sm">
            <div class="container">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#myMenu" aria-controls="myMenu" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="myMenu">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item">
                            <a class="nav-link active" href="<?= Utility::FrontWebView ?>products/allProducts.php">All Product <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Laptop</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Mobile</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Tablet</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= Utility::FrontWebView ?>static/contact.php">Contact</a>
                        </li>
                    </ul>
                    <form class="form-inline my-2 my-lg-0">
                        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn my-2 my-sm-0" type="submit">Search</button>
                    </form>
                </div>
            </div>
        </nav>
    </div>
</div>