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
            <h4 class="my-3"> Subscriber </h4>

            <div class="form-group">
                <label for="email" class="col-sm-2 control-label"> Email</label>
                <div class="col-sm-10">
                    <input required type="text" name="email" class="form-control" id="email" placeholder="Enter your email here">
                </div>
            </div>
            <div class="button mx-3">
                <input type="submit" value="Subscribe Now" class="btn btn-success">
            </div>
        </form>
    </div>
</div>


<?php
$pageContent = ob_get_contents();
ob_end_clean();
echo str_replace("##content##", $pageContent, $layout)
?>