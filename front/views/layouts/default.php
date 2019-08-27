<?php
include_once($_SERVER['DOCUMENT_ROOT'] . '/teamextreme-project/vendor/autoload.php');

use team_extreme\Utility\Utility;
?>
<!doctype html>
<html lang="en">
<?php
include_once(Utility::getFrontElement("head.php"));
?>

<body>
    <!-- Markup for header -->
    <?php
    include_once(Utility::getFrontElement("header.php"));
    ?>
    <!-- //Markup for header -->

    <!--Main Content-->
    <div class="container">
        <div class="row">
            <div class="pageTitle mx-auto">
                <h1 class="text-success my-5 font-weight-bold">##pageTitle##</h1>
            </div>
        </div>
        <div class="row my-5">
            ##Content##
        </div>
    </div>
    <!--//Main Content-->

    <!-- Markup Footer Section -->
    <?php
    include_once(Utility::getFrontElement("footer.php"));
    ?>
    <!-- //Markup Footer Section -->
    <!-- Optional JavaScript -->
    <?php
    include_once(Utility::getFrontElement("scripts.php"));
    ?>
</body>

</html>