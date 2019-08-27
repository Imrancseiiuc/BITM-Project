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
        <form method="post" class="form-horizontal col-md-6 col-md-offset-3  mx-auto" action="store.php">
            <h4> CREATE Operation IN BRANDS </h4>

            <div class="form-group">
                <label for="title" class="col-sm-2 control-label"> Title</label>
                <div class="col-sm-10">
                    <input required type="text" name="title" class="form-control" id="title" placeholder="Enter Brand's title here">
                </div>
            </div>

            <div class="form-group">
                <label for="link" class="col-sm-2 control-label"> Link</label>
                <div class="col-sm-10">
                    <input required type="text" name="link" class="form-control" id="link" placeholder="Enter link here">
                </div>
            </div>

            <div class="button mx-3">
                <button type="submit" class="btn btn-secondary col-md-2 col-md-offset-10" value="submit" />SUBMIT</button>
            </div>

        </form>


        <?php
        $pageContent = ob_get_contents();
        ob_end_clean();
        echo str_replace("##content##", $pageContent, $layout)
        ?>