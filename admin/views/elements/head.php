<?php
include_once($_SERVER["DOCUMENT_ROOT"] . "/teamextreme-project/vendor/autoload.php");

use team_extreme\Utility\Utility;
?>

<head>
    <!-- meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700&display=swap" rel="stylesheet">
    <!-- Bootstrap Css -->
    <link rel="stylesheet" href="<?= Utility::AdminAssets . "css/bootstrap.min.css"; ?>">

    <!-- Font Awesome Css -->
    <link rel="stylesheet" href="<?= Utility::AdminAssets . "css/font-awesome.min.css"; ?>">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="<?= Utility::AdminAssets . "css/adminPanel.css"; ?>">

    <title>Admin Panel</title>
</head>