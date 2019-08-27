<?php
include_once($_SERVER["DOCUMENT_ROOT"] . "/teamextreme-project/vendor/autoload.php");

use team_extreme\Cart\Cart;
use team_extreme\Utility\Utility;

$cart = new cart();



$data = $_POST;
$files = $_FILES;


$result = $cart->store($data, $files);

if ($result) {
    echo "success";
    header("location:Utility::FrontWebView.\"products/singleProduct.php");
} else {
    echo "fail";
}
