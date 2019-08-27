<?php
include_once($_SERVER["DOCUMENT_ROOT"] . "/teamextreme-project/vendor/autoload.php");


use team_extreme\Utility\Utility;
use team_extreme\Tags\Tag;

$tag = new Tag();

$data = $_GET;

$views = $tag->view($data);

ob_start();
include_once($_SERVER["DOCUMENT_ROOT"] . Utility::AdminLayouts . "/default.php");
$layout = ob_get_contents();
ob_end_clean();
?>

<?php
ob_start();
?>


<div class="container bootstrap snippet">
    <div class="row">
        <div class="col-md-6 mx-auto">
            <div class="panel-body inf-content mt-5 px-5">
                <h3 class="my-4">Tag Information</h3>
                <div class="table-responsive">
                    <table class="table table-condensed table-responsive table-user-information">
                        <?php
                        foreach ($views as $row) {
                            ?>
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
                                            <i class="fa fa-user"></i>
                                            Title
                                        </strong>
                                    </td>
                                    <td class="text-primary">
                                        <?php echo $row['title'] ?>
                                    </td>
                                </tr>
                            </tbody>
                        <?php
                        }
                        ?>
                    </table>
                </div>
                <a href="index.php" class="my-5 btn btn-secondary mx-2">Back To Home</a>
            </div>
        </div>
    </div>
</div>

<?php
$pageContent = ob_get_contents();
ob_end_clean();
echo str_replace("##content##", $pageContent, $layout)
?>