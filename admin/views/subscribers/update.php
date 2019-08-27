<?php
include_once($_SERVER["DOCUMENT_ROOT"] . "/teamextreme-project/vendor/autoload.php");

use team_extreme\Subscribers\Subscriber;

$subscriber = new Subscriber();



$data = $_POST;


$result = $subscriber->update($data);

if ($result) {
    echo "success";
    header("location:index.php");
} else {
    echo "fail";
}
