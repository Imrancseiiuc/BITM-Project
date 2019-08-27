<?php
include_once($_SERVER["DOCUMENT_ROOT"] . "/teamextreme-project/vendor/autoload.php");

use team_extreme\Utility\Utility;
?>
<header>
    <div class="container-fluid p-0">
        <div class="top-nav">
            <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
                <a class="navbar-brand" href="<?= Utility::AdminWebView ?>pages/dashboard.php">Team Extreme</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#top-nav" aria-controls="navbarSupportedContent-4" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="top-nav">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <form class="form-inline my-2 my-lg-0 ml-auto">
                                <input class="form-control" type="search" placeholder="Search" aria-label="Search">
                                <button class="btn btn-outline-white btn-md my-2 my-sm-0 ml-3" type="submit">Search</button>
                            </form>
                        </li>
                        <li class="nav-item dropdown">
                            <a style="cursor: pointer" class="nav-link dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fa fa-user"></i> Profile </a>
                            <ul class="dropdown-menu dropdown-menu-right dropdown-info" aria-labelledby="user">
                                <a class="dropdown-item" href="#">My account</a>
                                <a class="dropdown-item" href="admins/logout.php">Log out</a>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
        <div class="menu">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#menu" aria-controls="menu" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="menu">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item">
                            <a href="<?php echo Utility::AdminWebView . "pages/dashboard.php" ?>" class="nav-link">Dashboard</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">Admins</a>
                        </li>
                        <li class="nav-item">
                            <a href="<?php echo Utility::AdminWebView . "brands/index.php" ?>" class="nav-link">Brands</a>
                        </li>
                        <li class="nav-item">
                            <a href="<?php echo Utility::AdminWebView . "categories/index.php" ?>" class="nav-link">Categories</a>
                        </li>
                        <li class="nav-item">
                            <a href="<?php echo Utility::AdminWebView . "products/index.php" ?>" class="nav-link">Products</a>
                        </li>
                        <li class="nav-item">
                            <a href="<?php echo Utility::AdminWebView . "slider/index.php" ?>" class="nav-link">Slider</a>
                        </li>
                        <li class="nav-item">
                            <a href="<?php echo Utility::AdminWebView . "subscribers/index.php" ?>" class="nav-link">Subscribers</a>
                        </li>
                        <li class="nav-item">
                            <a href="<?php echo Utility::AdminWebView . "cart/index.php" ?>" class="nav-link">Cart</a>
                        </li>
                        <li class="nav-item">
                            <a href="<?php echo Utility::AdminWebView . "tags/index.php" ?>" class="nav-link">Tags</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>
</header>