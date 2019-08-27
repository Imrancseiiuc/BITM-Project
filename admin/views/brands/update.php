<?php
include_once($_SERVER["DOCUMENT_ROOT"] . "/teamextreme-project/vendor/autoload.php");

use team_extreme\Product\Product;
use team_extreme\Brands\Brand;

$brand = new Brand();
$data = $_POST;


$result = $brand->update($data);

if ($result) {
    echo "success";
    header("location:index.php");
} else {
    echo "fail";
}

$id = $_POST['id'];
$title = $_POST["title"];
$link = $_POST["link"];
$modified_at = date('Y-m-d h:i:s', time());

$data = [
    'title'  =>  $title,
    'link'  =>  $link,
    'modified_at'  => $modified_at,
    'id'  =>  $id
];
