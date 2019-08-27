<?php
include_once($_SERVER["DOCUMENT_ROOT"] . "/teamextreme-project/vendor/autoload.php");

use team_extreme\Utility\Utility;

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
        <div class="pageTitle mx-auto my-4">
            <h2>Add New Product</h2>
        </div>
    </div>
    <div class="row">
        <div class="col-md-8 offset-md-2 p-5">
            <form method="post" class="form-horizontal" action="store.php" enctype="multipart/form-data">

                <div class="form-group">
                    <label for="title" class="col-sm-2 control-label"> Title</label>
                    <div class="col-sm-10">
                        <input type="text" name="title" class="form-control" id="title" placeholder="Input Product Title">
                    </div>
                </div>


                <div class="form-group">
                    <label for="picture" class="col-sm-2 control-label">Picture</label>
                    <div class="col-sm-10">
                        <input type="file" name="picture" class="form-control" id="picture" placeholder="varchar">
                    </div>
                </div>

                <div class="form-group">
                    <label for="mrp" class="col-sm-2 control-label">MRP</label>
                    <div class="col-sm-10">
                        <input type="text" name="mrp" class="form-control" id="mrp" placeholder="float">
                    </div>
                </div>

                <div class="form-group">
                    <label for="short_description" class="col-sm-6 control-label"> Short Description</label>
                    <div class="col-sm-10">
                        <input type="text" name="short_description" class="form-control" id="short_description" placeholder="Product Short Description">
                    </div>
                </div>
                <div class="form-group">
                    <label for="description" class="col-sm-6 control-label">Description</label>
                    <div class="col-sm-10">
                        <input type="text" name="description" class="form-control" id="description" placeholder="Product Description">
                    </div>
                </div>

                <div class="form-group">
                    <label for="color" class="col-sm-2 control-label">Color</label>
                    <div class="col-sm-10">
                        <input type="text" name="color" class="form-control" id="color" placeholder="Product Color">
                    </div>
                </div>
                <div class="form-group">
                    <label for="input1" class="col-sm-2 control-label">Size</label>
                    <div class="col-sm-10">
                        <input type="text" name="size" class="form-control" id="size" placeholder="Product Size">
                    </div>
                </div>
                <button type="submit" class="btn btn-primary col-md-2 col-md-offset-10" value="submit" />Submit</button>
            </form>
        </div>
    </div>
</div>
<?php
$pageContent = ob_get_contents();
ob_end_clean();
echo str_replace("##content##", $pageContent, $layout)
?>