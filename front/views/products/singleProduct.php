<?php
include_once($_SERVER["DOCUMENT_ROOT"] . "/teamextreme-project/vendor/autoload.php");
session_start();
use team_extreme\Product\Product;
use team_extreme\Utility\Utility;

$product = new Product();

$data = $_GET;

$views = $product->view($data);

ob_start();
include_once($_SERVER["DOCUMENT_ROOT"] . Utility::FrontLayouts . "/default.php");
$layout = ob_get_contents();
ob_end_clean();
?>

<?php
ob_start();
?>
<div class="container" id="single-product">
    <?php
    foreach ($views as $row) {
        ?>
        <div class="row">
            <div class="col-md-6">
                <div class="productImg p-4 overflow-hidden">
                    <img width="100%" class="img-fluid rounded" src="<?= "http://localhost/teamextreme-project/public/upload/" ?><?= $row['picture'] ?>">
                </div>
            </div>
            <div class="col-md-6">
                <div class="productShortInfo">
                    <h4 class="productTitle"><?php echo $row['title'] ?></h4>
                    <div class="shortDescription">
                        <p><?php echo $row['short_description'] ?></p>
                    </div>
                    <h2 class="productPrice text-success"><strong class="pr-2"><?php echo $row['mrp'] ?></strong>৳</h2>
                </div>
                <div class="cutomerReview">
                    <p class="d-inline-block pr-4">0 Customer Review</p>
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star-half-empty"></span>
                    <span class="fa fa-star-o"></span>
                </div>

                <div class="action">
                    <form method="post" action="<?= Utility::AdminWebView . "cart/store.php" ?>" enctype="multipart/form-data">
                        <div class="form-group">
                            <input class="form-control" type="hidden" name="product_id" id="product_id" value="<?php echo $row['id'] ?>">
                        </div>
                        <div class="form-group">
                            <input class="form-control" type="hidden" name="product_title" id="product_title" value="<?php echo $row['title'] ?>">
                        </div>
                        <div class="form-group">
                            <input class="form-control" type="hidden" name="slid" id="sid" value="<?php echo $_SESSION['guest'];?>">
                        </div>
                        <div class="form-group">
                            <input class="form-control" type="hidden" name="picture" id="picture" value="<?= $row['picture'] ?>">
                        </div>
                        <div class="form-group">
                            <input class="form-control" type="hidden" name="unit_price" id="unit_price" value="<?php echo $row['mrp'] ?>">
                        </div>
                        <div class="form-group">
                            <input class="form-control-sm" type="number" name="qty" id="qty" value="1" min="1">
                        </div>
                        <input type="submit" value="Add to Cart" class="cartSubmit btn btnsecondary">
                    </form>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="productInfo p-4">
                <div class="description">
                    <p class="text-justify"><?php echo $row['description'] ?></p>
                </div>
            </div>
        </div>
    <?php
    }
    ?>
</div>
<?php
$pageContent = ob_get_contents();
$pagetitle = "";
ob_end_clean();
echo str_replace(["##pageTitle##", "##Content##"], [$pagetitle, $pageContent], $layout);
?>
<script>
    $(document).ready(function () {
        $(".cartSubmit").on("click",function () {
            location.reload();
        })
    });
</script>
