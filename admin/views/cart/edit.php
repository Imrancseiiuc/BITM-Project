<?php
include_once($_SERVER["DOCUMENT_ROOT"] . "/teamextreme-project/vendor/autoload.php");

use team_extreme\Cart\Cart;
use team_extreme\Utility\Utility;

$cart = new Cart();

$data = $_GET;

$editShow = $cart->edit($data);

ob_start();
include_once($_SERVER["DOCUMENT_ROOT"] . Utility::AdminLayouts . "/default.php");
$layout = ob_get_contents();
ob_end_clean();
?>

<?php
ob_start();
?>




<div class="container">
    <div class="row">
        <?php
        foreach ($editShow as $row) {
            ?>
            <form method="post" class="form-horizontal col-md-6 col-md-offset-3  mx-auto" action="update.php" enctype="multipart/form-data">

                <div class="form-group">
                    <label for="id" class="col-sm-2 control-label"></label>
                    <div class="col-sm-10">
                        <input required type="hidden" name="id" class="form-control" id="id" value="<?php echo $row['id'] ?>">
                    </div>
                </div>
                <div class="form-group">
                    <label for="slid" class="col-sm-2 control-label">Sl Id</label>
                    <div class="col-sm-10">
                        <input required type="text" name="slid" class="form-control" id="slid" value="<?php echo $row['slid'] ?>">
                    </div>
                </div>
                <div class="form-group">
                    <label for="product_id" class="col-sm-2 control-label">Product Id</label>
                    <div class="col-sm-10">
                        <input required type="text" name="product_id" class="form-control" id="product_id" value="<?php echo $row['product_id'] ?>">
                    </div>
                </div>
                <div class="form-group">
                    <label for="picture" class="col-sm-2 control-label">Picture</label>
                    <div class="col-sm-10">
                        <input type="file" name="picture" class="form-control" id="picture">
                    </div>
                </div>
                <div class="form-group">
                    <label for="product_title" class="col-sm-2 control-label">Product Title</label>
                    <div class="col-sm-10">
                        <input required type="text" name="product_title" class="form-control" id="product_title" value="<?php echo $row['product_title'] ?>">
                    </div>
                </div>
                <div class="form-group">
                    <label for="qty" class="col-sm-2 control-label">Quantity</label>
                    <div class="col-sm-10">
                        <input required type="number" name="qty" class="form-control" id="qty" value="<?php echo $row['qty'] ?>">
                    </div>
                </div>
                <div class="form-group">
                    <label for="unit_price" class="col-sm-2 control-label">Unit Price</label>
                    <div class="col-sm-10">
                        <input required type="number" name="unit_price" class="form-control" id="unit_price" value="<?php echo $row['unit_price'] ?>">
                    </div>
                </div>
                <div class="form-group">
                    <label for="total_price" class="col-sm-2 control-label">Total Price</label>
                    <div class="col-sm-10">
                        <input required type="number" name="total_price" class="form-control" id="total_price" value="<?php echo $row['total_price'] ?>">
                    </div>
                </div>
                <input type="submit" value="Save" class="btn btn-success">



            </form>


        <?php
        }
        ?>






        <?php
        $pageContent = ob_get_contents();
        ob_end_clean();
        echo str_replace("##content##", $pageContent, $layout)
        ?>