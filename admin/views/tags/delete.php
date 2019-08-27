<?php
include_once ($_SERVER["DOCUMENT_ROOT"]."/teamextreme-project/vendor/autoload.php");


use team_extreme\Tags\Tag;

$tag= new Tag();

$data = $_GET;




$result = $tag->delete($data);

if($result){
    echo "success";
    header("location:index.php");
}else{
    echo "fail";
}
