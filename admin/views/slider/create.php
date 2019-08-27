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
        <form method="post" class="form-horizontal col-md-6 col-md-offset-3  mx-auto" action="store.php" enctype="multipart/form-data">
            <h4> CREATE Operation IN Slider </h4>

            <div class="form-group">
                <label for="title" class="col-sm-2 control-label"> Title</label>
                <div class="col-sm-10">
                    <input required type="text" name="title" class="form-control" id="title" placeholder="Enter Slider's title here">
                </div>
            </div>

            <div class="form-group">
                <label for="image" class="col-sm-2 control-label"> Image</label>
                <div class="col-sm-10">
                    <input required type="file" name="image" class="form-control" id="image" placeholder="Enter image here">
                </div>
            </div>

            <div class="button mx-3">
                <button type="submit" class="btn btn-secondary col-md-2 col-md-offset-10" value="submit" />SUBMIT</button>
            </div>

        </form>
    </div>
</div>


<?php
$pageContent = ob_get_contents();
ob_end_clean();
echo str_replace("##content##", $pageContent, $layout)
?>