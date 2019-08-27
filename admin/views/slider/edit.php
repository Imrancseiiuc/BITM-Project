<?php
include_once($_SERVER["DOCUMENT_ROOT"] . "/teamextreme-project/vendor/autoload.php");

use team_extreme\Utility\Debugger;
use team_extreme\Utility\Utility;
use team_extreme\Slider\Slider;

$slider = new Slider();

$data = $_GET;

$editShow = $slider->edit($data);

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
                <h4 class="mx-3"> Edit Operation In Slider </h4>

                <div class="form-group">
                    <div class="col-sm-10">
                        <input type="hidden" name="id" class="form-control" id="id" value="<?php echo $row['id'] ?>">
                    </div>
                </div>

                <div class="form-group">
                    <label for="title" class="col-sm-2 control-label"> Title</label>
                    <div class="col-sm-10">
                        <input type="text" name="title" class="form-control" id="title" value="<?php echo $row['title'] ?>">
                    </div>
                </div>

                <div class="form-group">
                    <label for="image" class="col-sm-2 control-label"> Image</label>
                    <div class="col-sm-10">
                        <input type="file" name="image" class="form-control" id="image" value="<?= "http://localhost/teamextreme-project/public/upload/" ?><?= $row['image'] ?>">
                        <img class="form-control" src="<?= "http://localhost/teamextreme-project/public/upload/" ?><?= $row['image'] ?>" id="productPictureThumb" width="200px" />

                    </div>
                </div>

                <div class="button mx-3">
                    <button type="submit" class="btn btn-success col-md-2 col-md-offset-10" value="submit" />SUBMIT</button>
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