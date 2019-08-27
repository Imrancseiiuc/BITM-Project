<?php
include_once($_SERVER["DOCUMENT_ROOT"] . "/teamextreme-project/vendor/autoload.php");

use team_extreme\Utility\Utility;
use team_extreme\Tags\Tag;

$tag = new Tag();

$data = $_GET;

$editShow = $tag->edit($data);

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
                <h4 class="mx-3"> Edit Tag </h4>

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

                <div class="button mx-3">
                    <button type="submit" class="btn btn-success col-md-2 col-md-offset-10" value="submit" />Save</button>
                </div>

            </form>
        <?php
        }
        ?>






        <?php
        $pageContent = ob_get_contents();
        ob_end_clean();
        echo str_replace("##content##", $pageContent, $layout)
        ?>