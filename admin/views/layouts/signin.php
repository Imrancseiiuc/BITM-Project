<?php
include_once($_SERVER["DOCUMENT_ROOT"] . "/teamextreme-project/vendor/autoload.php");

use team_extreme\Utility\Utility;
?>
<!doctype html>
<html lang="en">
<?php include_once(Utility::getAdminElement("head.php")) ?>

<body>
    <div class="container">
        <div class="row">
            ##Content##
        </div>
    </div>
    <!-- Optional JavaScript -->
    <?php include_once(Utility::getAdminElement("scripts.php")) ?>

</body>

</html>