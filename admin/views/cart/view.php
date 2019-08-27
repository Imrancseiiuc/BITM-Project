<?php
include_once($_SERVER["DOCUMENT_ROOT"] . "/teamextreme-project/vendor/autoload.php");

use team_extreme\Cart\Cart;
use team_extreme\Utility\Utility;

use  team_extreme\Categories\Categorie;

$cart = new Cart();

$data = $_GET;

$views = $cart->view($data);

ob_start();
include_once($_SERVER["DOCUMENT_ROOT"] . Utility::AdminLayouts . "/default.php");
$layout = ob_get_contents();
ob_end_clean();
?>

<?php
ob_start();
?>

<div class="container bootstrap snippet">
    <div class="panel-body inf-content mt-5">
        <?php
        foreach ($views as $row) {
            ?>
            <div class="row">
                <div class="col-md-5 p-4 my-5">
                    <img alt="" style="width:600px;" title="Product Image" class=" img-thumbnail" src="<?= "http://localhost/teamextreme-project/public/upload/" ?><?= $row['picture'] ?>">

                </div>
                <div class="col-md-6">
                    <h3 class="my-4">Product Information</h3>
                    <div class="table-responsive">
                        <table class="table table-condensed table-responsive table-user-information">

                            <tbody>
                                <tr>
                                    <td>
                                        <strong>
                                            <i class="fa fa-id-badge"></i>
                                            Identificacion
                                        </strong>
                                    </td>
                                    <td class="text-primary">
                                        <?php echo $row['id'] ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>
                                            <i class=""></i>
                                            Title
                                        </strong>
                                    </td>
                                    <td class="text-primary">
                                        <?php echo $row['product_title'] ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>
                                            <i class=""></i>
                                            Unit Price
                                        </strong>
                                    </td>
                                    <td class="text-primary">
                                        <?php echo $row['unit_price'] ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>
                                            <i class=""></i>
                                            Total Price
                                        </strong>
                                    </td>
                                    <td class="text-primary">
                                        <?php echo $row['total_price'] ?>
                                    </td>
                                </tr>

                            </tbody>

                        </table>
                    </div>
                    <a href="index.php" class="my-5 btn btn-success">Back To Home</a>
                </div>
            </div>
        <?php
        }
        ?>
    </div>
</div>

<?php
$pageContent = ob_get_contents();
ob_end_clean();
echo str_replace("##content##", $pageContent, $layout)
?>