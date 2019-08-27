<?php
include_once($_SERVER["DOCUMENT_ROOT"] . "/teamextreme-project/vendor/autoload.php");

use team_extreme\Utility\Debugger;
use team_extreme\Utility\Utility;
use team_extreme\Subscribers\Subscriber;

$subscriber = new Subscriber();

$data = $_GET;

$editShow = $subscriber->edit($data);

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
            <form method="post" class="form-horizontal col-md-6 col-md-offset-3  mx-auto" action="update.php">
                <h4 class="mx-3"> Edit Operation IN Subscribers </h4>

                <div class="form-group">
                    <div class="col-sm-10">
                        <input type="hidden" name="id" class="form-control" id="id" value="<?php echo $row['id'] ?>">
                    </div>
                </div>
                <div class="form-group">
                    <label for="email" class="col-sm-2 control-label"> Email</label>
                    <div class="col-sm-10">
                        <input type="text" name="email" class="form-control" id="email" value="<?php echo $row['email'] ?>">
                    </div>
                </div>
                <div class="button mx-3">
                    <input type="submit" value="Save" class="btn btn-success">
                </div>

            </form>
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