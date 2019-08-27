<?php
include_once($_SERVER["DOCUMENT_ROOT"] . "/teamextreme-project/vendor/autoload.php");

use team_extreme\Utility\Utility;
use team_extreme\DataBase\Db;
use team_extreme\Product\Product;

Db::connect();
$product = new Product();
$products = $product->productList();

ob_start();
include_once($_SERVER["DOCUMENT_ROOT"] . Utility::FrontLayouts . "/default.php");
$layout = ob_get_contents();
ob_end_clean();
?>

<?php
ob_start();
?>

<!-- Markup for Product Category Section-->
<div class="container">
    <div class="row">
        <?php
        foreach ($products as $row) {
            ?>
            <div class="col-lg-4 col-md-6">
                <div class="singleProduct mt-5">
                    <div class="card">
                        <div class="cardImg p-3">
                            <a href="singleProduct.php?view=<?php
                                                            echo $row['id'];
                                                            ?>">
                                <img class="card-img-top img-fluid" src="<?= "http://localhost/teamextreme-project/public/upload/" ?><?= $row['picture'] ?>">
                            </a>
                        </div>
                        <div class="cardContent text-center">
                            <div class="card-body">
                                <a href="singleProduct.php?view=<?php
                                                                echo $row['id'];
                                                                ?>">
                                    <h4 class="productTitle"><?php echo $row['title'] ?></h4>
                                </a>
                                <p class="price"><del></del><span>$<?php
                                                                    echo $row['mrp'];
                                                                    ?></span></p>
                                <div class="productRating">
                                    <span><i class="fa fa-star"></i></span>
                                    <span><i class="fa fa-star"></i></span>
                                    <span><i class="fa fa-star"></i></span>
                                    <span><i class="fa fa-star"></i></span>
                                    <span><i class="fa fa-star-half-o"></i></span>
                                </div>
                                <div class="cardHover">

                                    <button class="btn"><i class="fa fa-edit"></i></button>
                                    <button class="btn"><i class="fa fa-exchange"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php
        }
        ?>
    </div>
</div>
<?php
$pageContent = ob_get_contents();
$pagetitle = "";
ob_end_clean();
echo str_replace(["##pageTitle##", "##Content##"], [$pagetitle, $pageContent], $layout);
?>