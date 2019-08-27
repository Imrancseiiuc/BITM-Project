<?php
include_once($_SERVER["DOCUMENT_ROOT"] . "/teamextreme-project/vendor/autoload.php");

use team_extreme\Product\Product;

use team_extreme\Categories\Categorie;

$categorie = new Categorie();
$data = $_POST;


$result = $categorie->update($data);

if ($result) {
    echo "success";
    header("location:index.php");
} else {
    echo "fail";
}

$id = $_POST['id'];
$name = $_POST["name"];
$link = $_POST["link"];
$modified_at = date('Y-m-d h:i:s', time());

$data = [
    'name'  =>  $name,
    'link'  =>  $link,
    'modified_at'  => $modified_at,
    'id'  =>  $id
];
