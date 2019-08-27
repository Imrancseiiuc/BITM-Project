<?php
include_once($_SERVER["DOCUMENT_ROOT"] . "/teamextreme-project/vendor/autoload.php");

use team_extreme\Product\Product;
use team_extreme\Utility\Debugger;
use team_extreme\Utility\Utility;

$product = new Product();

$data = $_GET;

$editShow = $product->edit($data);

ob_start();
include_once($_SERVER["DOCUMENT_ROOT"] . Utility::AdminLayouts . "/default.php");
$layout = ob_get_contents();
ob_end_clean();
?>

<?php
ob_start();
?>

<div class="container">

    <div class="card bg-light">
        <article class="card-body mx-auto" style="max-width: 400px;">
            <h4 class="card-title mt-3 text-center">Edit Account Information</h4>
            <?php
            foreach ($editShow as $row) {
                ?>
                <form method="post" action="update.php" enctype="multipart/form-data">
                    <div class="form-group">
                        <input type="hidden" name="id" value="<?php echo $row['id'] ?>">
                    </div>
                    <div class="form-group input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"> <i class=""></i>Title: </span>
                        </div>
                        <input name="title" class="form-control" value="<?php echo $row['title'] ?>" type="varchar">
                    </div>

                    <div class="form-group input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"> <i class=""></i>Picture</span>
                        </div>

                        <input type="file" name="picture" class="form-control" id="picture" value="<?= "http://localhost/teamextreme-project/public/upload/" ?><?= $row['picture'] ?>" checked>
                        <img class="form-control" src="<?= "http://localhost/teamextreme-project/public/upload/" ?><?= $row['picture'] ?>" id="productPictureThumb" width="200px" />
                    </div>

                    <!-- form-group// -->
                    <div class="form-group input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"> <i class="f"></i>MRP </span>
                        </div>

                        <input name="mrp" class="form-control" value="<?php echo $row['mrp'] ?>" type="float">
                    </div> <!-- form-group// -->

                    <div class="form-group input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"> <i class=""></i>Short Description: </span>
                        </div>

                        <input name="short_description" class="form-control" value="<?php echo $row['short_description'] ?>" type="text">
                    </div> <!-- form-group// -->
                    <div class="form-group input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"> Description </span>
                        </div>

                        <input name="description" class="form-control" value="<?php echo $row['description'] ?>" type="text">
                    </div> <!-- form-group// -->

                    <div class="form-group input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"> <i class=""></i>Color: </span>
                        </div>

                        <input name="color" class="form-control" value="<?php echo $row['color'] ?>" type="varchar">
                    </div> <!-- form-group// -->

                    <div class="form-group input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"> <i class=""></i>Size: </span>
                        </div>

                        <input name="size" class="form-control" value="<?php echo $row['size'] ?>" type="float">
                    </div> <!-- form-group// -->


                    <!-- form-group// -->
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary btn-block"> Save</button>
                    </div> <!-- form-group// -->
                </form>
            <?php
            }
            ?>
        </article>
    </div> <!-- card.// -->

</div>
<?php
$pageContent = ob_get_contents();
ob_end_clean();
echo str_replace("##content##", $pageContent, $layout)
?>