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
<div class="col-md-4 offset-md-4 my-4">
    <form>
        <div class="form-group">
            <label for="name"><b>Name : </b></label>
            <input type="text" name="name" id="name" class="form-control" placeholder="Your Name">
        </div>
        <div class="form-group">
            <label for="emailemail"><b>Email : </b></label>
            <input type="email" name="email" id="email" class="form-control" placeholder="Your Email">
        </div>
        <div class="form-group">
            <label for="subject"><b>Subject : </b></label>
            <input type="text" name="subject" id="subject" class="form-control" placeholder="Your Subject">
        </div>
        <div class="form-group">
            <textarea class="form-control" placeholder="Your Message" rows="8"></textarea>
        </div>
        <div class="form-group">
            <input type="submit" value="Submit" class="btn btn-success form-control">
        </div>
    </form>
</div>

<?php
$pageContent = ob_get_contents();
$pagetitle = "Contact";
ob_end_clean();
echo str_replace(["##pageTitle##", "##Content##"], [$pagetitle, $pageContent], $layout);
?>