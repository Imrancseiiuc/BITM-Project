<?php
include_once($_SERVER["DOCUMENT_ROOT"] . "/teamextreme-project/vendor/autoload.php");

use team_extreme\Product\Product;
use team_extreme\Utility\Utility;

$product = new Product();

$data = $_GET;

$views = $product->view($data);

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
                                        <?php echo $row['title'] ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>
                                            <i class=""></i>
                                            Picture
                                        </strong>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>
                                            <i class=""></i>
                                            MRP
                                        </strong>
                                    </td>
                                    <td class="text-primary">
                                        <?php echo $row['mrp'] ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>
                                            <i class=""></i>
                                            Short Description
                                        </strong>
                                    </td>
                                    <td class="text-primary">
                                        <?php echo $row['short_description'] ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>
                                            <i class=""></i>
                                            Color
                                        </strong>
                                    </td>
                                    <td class="text-primary">
                                        <?php echo $row['color'] ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>
                                            <i class=""></i>
                                            Size
                                        </strong>
                                    </td>
                                    <td class="text-primary">
                                        <?php echo $row['size'] ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>
                                            <i class="fa fa-calendar"></i>
                                            created At
                                        </strong>
                                    </td>
                                    <td class="text-primary">
                                        <?php echo $row['created_at'] ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>
                                            <i class="fa fa-calendar-plus-o"></i>
                                            Modified At
                                        </strong>
                                    </td>
                                    <td class="text-primary">
                                        <?php echo $row['modifies_at'] ?>
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