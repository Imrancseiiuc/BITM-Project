<?php
include_once($_SERVER["DOCUMENT_ROOT"] . "/teamextreme-project/vendor/autoload.php");

use team_extreme\Cart\Cart;

$cart = new Cart();
$data = $_POST;
$files = $_FILES;


$result = $cart->update($data, $files);

if ($result) {
    echo "success";
    header("location:index.php");
} else {
    echo "fail";
}
