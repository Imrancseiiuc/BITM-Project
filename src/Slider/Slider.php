<?php

namespace team_extreme\Slider;

use team_extreme\DataBase\Db;


class Slider
{
    public $conn = null;


    public function __construct()
    {
        $this->conn = Db::connect();
    }
    public function store($data, $files)
    {
        $fileName = $files['image']['name'];
        $target = $files['image']['tmp_name'];
        $destination = $_SERVER['DOCUMENT_ROOT'] . "/teamextreme-project/public/upload/" . $fileName;
        move_uploaded_file($target, $destination);
        $picture = $fileName;

        $sql = "INSERT INTO `slider` (`title`, `image`, `soft_delete`, `created_at`, `modified_at`) VALUES (:title,:image,:soft_delete,:created_at,:modified_at)";

        $statement = $this->conn->prepare($sql);

        $statement->bindValue(':title', $data['title']);
        $statement->bindValue(':image', $picture);
        $statement->bindValue(':soft_delete', null);
        $statement->bindValue(':created_at', date('Y-m-d h:i:s', time()));
        $statement->bindValue(':modified_at', null);

        $result = $statement->execute();
        return $result;
    }
    public function sliderList()
    {
        $sql = "SELECT * FROM `slider`  ";
        $statement = $this->conn->prepare($sql);
        $statement->execute();
        $result = $statement->fetchAll();
        return $result;
    }

    public function edit($data)
    {
        $id = $data["edit"];
        $sql = "SELECT * FROM `slider` WHERE id=$id";
        $statement = $this->conn->prepare($sql);
        $statement->execute();
        $result = $statement->fetchAll();
        return $result;
    }

    public function update($data, $files)
    {
        $fileName = $files['image']['name'];
        $target = $files['image']['tmp_name'];
        $destination = $_SERVER['DOCUMENT_ROOT'] . "/teamextreme-project/public/upload/" . $fileName;
        move_uploaded_file($target, $destination);

        $id = $data['id'];
        $title = $data['title'];
        $image = $fileName;
        $modified_at = date('Y-m-d h:i:s', time());

        $editData = [
            'title'  =>  $title,
            'image'  =>  $image,
            'modified_at'  => $modified_at,
            'id'  =>  $id
        ];
        $sql = "UPDATE slider SET title=:title, image=:image, modified_at=:modified_at WHERE id=:id";
        $statement = $this->conn->prepare($sql);
        $result = $statement->execute($editData);
        return $result;
    }
    public function delete($data)
    {
        $id = $data["delete"];
        $sql = "DELETE FROM `slider` WHERE id=$id";
        $statement = $this->conn->prepare($sql);
        $result = $statement->execute();
        return $result;
    }

    public function view($data)
    {
        $id = $data["view"];
        $sql = "SELECT * FROM `slider` WHERE id=$id";
        $statement = $this->conn->prepare($sql);
        $statement->execute();
        $result = $statement->fetchAll();
        return $result;
    }
}
