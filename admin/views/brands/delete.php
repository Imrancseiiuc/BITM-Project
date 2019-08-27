<?php
include_once ($_SERVER["DOCUMENT_ROOT"]."/teamextreme-project/vendor/autoload.php");

use team_extreme\Product\Product;
use team_extreme\Utility\Debugger;
use team_extreme\Brands\Brand;

$brand= new Brand();

$data = $_GET;




$result = $brand->delete($data);

if($result){
    echo "success";
    header("location:index.php");
}else{
    echo "fail";
}
