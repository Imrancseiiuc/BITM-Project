<?php
include_once($_SERVER["DOCUMENT_ROOT"] . "/teamextreme-project/vendor/autoload.php");

use team_extreme\Product\Product;

$product = new Product();



$data = $_POST;
$files = $_FILES;


$result = $product->store($data, $files);

if ($result) {
    echo "success";
    header("location:index.php");
} else {
    echo "fail";
}
