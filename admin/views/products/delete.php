<?php
    include_once ($_SERVER["DOCUMENT_ROOT"]."/teamextreme-project/vendor/autoload.php");

    use team_extreme\Product\Product;
    use team_extreme\Utility\Debugger;

    $product= new Product();

    $data = $_GET;




$result = $product->delete($data);

if($result){
    echo "success";
    header("location:index.php");
}else{
    echo "fail";
}
