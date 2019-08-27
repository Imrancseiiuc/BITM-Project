<?php
include_once ($_SERVER["DOCUMENT_ROOT"]."/teamextreme-project/vendor/autoload.php");

use team_extreme\Cart\Cart;

$cart= new Cart();

$data = $_GET;




$result = $cart->delete($data);

if($result){
    echo "success";
    header("location:Utility::FrontWebView.\"products/singleProduct.php");
}else{
    echo "fail";
}
