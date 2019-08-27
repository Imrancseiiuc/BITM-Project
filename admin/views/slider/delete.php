<?php
include_once($_SERVER["DOCUMENT_ROOT"] . "/teamextreme-project/vendor/autoload.php");

use team_extreme\Utility\Debugger;
use team_extreme\Slider\Slider;

$slider = new Slider();

$data = $_GET;




$result = $slider->delete($data);

if ($result) {
    echo "success";
    header("location:index.php");
} else {
    echo "fail";
}
