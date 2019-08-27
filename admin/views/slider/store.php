<?php
include_once($_SERVER["DOCUMENT_ROOT"] . "/teamextreme-project/vendor/autoload.php");

use team_extreme\Slider\Slider;

$slider = new Slider();


$data = $_POST;
$files = $_FILES;


$result = $slider->store($data, $files);

if ($result) {
    echo "success";
    header("location:index.php");
} else {
    echo "fail";
}
