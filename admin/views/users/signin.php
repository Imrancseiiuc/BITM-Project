<?php
include_once($_SERVER["DOCUMENT_ROOT"] . "/teamextreme-project/vendor/autoload.php");

use team_extreme\Utility\Utility;

ob_start();
include_once($_SERVER["DOCUMENT_ROOT"] . Utility::AdminLayouts . "/signin.php");
$layout = ob_get_contents();
ob_end_clean();
?>

<?php
ob_start();
?>
<div class="container">
    <div class="row">
        <div class="col-md-8 mx-auto">
            <form class="form-signin" method="post">
                <h2 class="form-signin-heading">Please Sign In</h2>
                <div class="form-group">
                    <input type="email" class="form-control" name="email" placeholder="Email Address" required="" autofocus="" />
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" name="password" placeholder="Password" required="" />
                </div>
                <div class="form-group">
                    <label class="checkbox">
                        <input type="checkbox" value="remember-me" id="rememberMe" name="rememberMe"> Remember me
                    </label>
                </div>
                <button class="btn btn-lg btn-primary btn-block" name="signIn" type="submit" onclick="document.location='http://localhost/teamextreme-project/admin/views/pages/dashboard.php'">Sign In</button>
                <p class="text-center">or</p>
                <a href="admins/signup.php" class="btn btn-lg btn-success btn-block" type="button">Sign Up</a>
            </form>
        </div>
    </div>
</div>
<?php
$pageContent = ob_get_contents();
ob_end_clean();
echo str_replace("##Content##", $pageContent, $layout)
?>