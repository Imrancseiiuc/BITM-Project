<?php
include_once ($_SERVER["DOCUMENT_ROOT"]."/teamextreme-project/vendor/autoload.php");

use team_extreme\Product\Product;
use team_extreme\Utility\Debugger;
use team_extreme\Categories\Categorie;

$categorie= new Categorie();

$data = $_GET;




$result = $categorie->delete($data);

if($result){
    echo "success";
    header("location:index.php");
}else{
    echo "fail";
}
