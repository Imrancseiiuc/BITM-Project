<?php

namespace team_extreme\Cart;

use team_extreme\DataBase\Db;


class Cart
{
    public $conn = null;


    public function __construct()
    {
        $this->conn = Db::connect();
    }


    public function store($data, $files)
    {

//        $fileName = $files['picture']['name'];
//        $target = $files['picture']['tmp_name'];
//        $destination = $_SERVER['DOCUMENT_ROOT'] . "/teamextreme-project/public/upload/" . $fileName;
//        move_uploaded_file($target, $destination);
//        $picture = $fileName;
        $picture = $data['picture'];
        $sql = "INSERT INTO `carts` (`sid`, `product_id`, `picture`, `product_title`, `qty`, `unit_price`, `total_price`) VALUES (:sid, :product_id, :picture, :product_title, :qty, :unit_price, :total_price)";
        $statement = $this->conn->prepare($sql);

        $statement->bindValue(':sid', $data['slid']);
        $statement->bindValue(':product_id', $data['product_id']);
        $statement->bindValue(':picture', $picture);
        $statement->bindValue(':product_title', $data['product_title']);
        $statement->bindValue(':qty', $data['qty']);
        $statement->bindValue(':unit_price', $data['unit_price']);
        $statement->bindValue(':total_price', $data['unit_price']*$data['qty']);

        $result = $statement->execute();

        return $result;
    }

    public function view($data)
    {
        $id = $data["view"];
        $sql = "SELECT * FROM `carts` WHERE id=$id";
        $statement = $this->conn->prepare($sql);
        $statement->execute();
        $result = $statement->fetchAll();
        return $result;
    }

    public function delete($data)
    {
        $id = $data["delete"];
        $sql = "DELETE FROM `carts` WHERE id=$id";
        $statement = $this->conn->prepare($sql);
        $result = $statement->execute();
        return $result;
    }
    public function cartList()
    {
        $sql = "SELECT * FROM `carts`  ";
        $statement = $this->conn->prepare($sql);
        $statement->execute();
        $result = $statement->fetchAll();
        return $result;
    }

    public function cartListBySid($sid)
    {

        $sql = "SELECT * FROM `carts` WHERE `sid` = :sid ";
        $statement = $this->conn->prepare($sql);
        $statement->bindParam('sid', $sid);
        $statement->execute();
        $result = $statement->fetchAll();

        return $result;
    }

    public function edit($data)
    {
        $id = $data["edit"];
        $sql = "SELECT * FROM `carts` WHERE id=$id";
        $statement = $this->conn->prepare($sql);
        $statement->execute();
        $result = $statement->fetchAll();
        return $result;
    }

    public function update($data, $files)
    {
        $fileName = $files['picture']['name'];
        $target = $files['picture']['tmp_name'];
        $destination = $_SERVER['DOCUMENT_ROOT'] . "/teamextreme-project/public/upload/" . $fileName;
        move_uploaded_file($target, $destination);

        $id = $data['id'];
        $picture = $fileName;
        $product_title = $data['product_title'];
        $qty = $data['qty'];
        $unit_price = $data['unit_price'];
        $total_price = $data['total_price'];


        $editData = [
            'id' => $id,
            'picture' => $picture,
            'product_title' => $product_title,
            'qty' => $qty,
            'unit_price' => $unit_price,
            'total_price' => $total_price,

        ];
        $sql = "UPDATE carts SET picture=:picture, product_title=:product_title, qty=:qty, unit_price=:unit_price, total_price=:total_price WHERE id=:id";
        $statement = $this->conn->prepare($sql);
        $result = $statement->execute($editData);
        return $result;
    }
}
