<?php
include_once($_SERVER["DOCUMENT_ROOT"] . "/teamextreme-project/vendor/autoload.php");

use team_extreme\Utility\Utility;

ob_start();
include_once($_SERVER["DOCUMENT_ROOT"] . Utility::FrontLayouts . "/default.php");
$layout = ob_get_contents();
ob_end_clean();
?>

<?php
ob_start();
?>
    <div  class="container">
        <div class="row">
            <table class="table">
                <thead>
                    <tr>
                        <th>Image</th>
                        <th>Title</th>
                        <th>Unit Price</th>
                        <th>Quantity</th>
                        <th>Total Price</th>
                        <th>Action</th>
                    </tr>
                </thead>
            </table>
        </div>
    </div>
<?php
$pageContent = ob_get_contents();
$pagetitle = "";
ob_end_clean();
echo str_replace(["##pageTitle##", "##Content##"], [$pagetitle, $pageContent], $layout);
?>