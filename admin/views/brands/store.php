<?php
include_once($_SERVER["DOCUMENT_ROOT"] . "/teamextreme-project/vendor/autoload.php");

use team_extreme\Utility\Utility;
use team_extreme\Utility\Debugger;
use team_extreme\Brands\Brand;
use team_extreme\Utility\Validator;

$brand = new Brand();



$data = $_POST;


$result = $brand->store($data);

if ($result) {
    echo "success";
    header("location:index.php");
} else {
    echo "fail";
}
