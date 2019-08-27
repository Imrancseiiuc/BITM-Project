<?php
include_once($_SERVER["DOCUMENT_ROOT"] . "/teamextreme-project/vendor/autoload.php");
use team_extreme\DataBase\Db;
Db::connect();
$sql = "SELECT * FROM carts ORDER BY id DESC";

$statement = $this->conn->prepare($sql);

if($statement->execute())
{
    $result = $statement->fetchAll();
    $output = '';
    foreach($result as $row)
    {
        $output .= '
            
        ';
    }
    echo $output;
}