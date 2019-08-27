<?php


namespace team_extreme\Brands;

use team_extreme\DataBase\Db;

class Brand
{
    public $conn = null;


    public function __construct()
    {
        $this->conn = Db::connect();
    }
    public function store($data)
    {
        $sql = "INSERT INTO `brands` (title, link, is_draft, is_active, soft_delete, created_at, modified_at)
VALUES (:title, :link, :is_draft, :is_active, :soft_delete, :created_at, :modified_at)";

        $statement = $this->conn->prepare($sql);

        $statement->bindValue(':title', $data['title']);
        $statement->bindValue(':link', $data['link']);
        $statement->bindValue(':is_draft', null);
        $statement->bindValue(':is_active', null);
        $statement->bindValue(':soft_delete', null);
        $statement->bindValue(':created_at', date('Y-m-d h:i:s', time()));
        $statement->bindValue(':modified_at', null);

        $result = $statement->execute();
        return $result;
    }
    public function brandList()
    {
        $sql = "SELECT * FROM `brands`  ";
        $statement = $this->conn->prepare($sql);
        $statement->execute();
        $result = $statement->fetchAll();
        return $result;
    }

    public function edit($data)
    {
        $id = $data["edit"];
        $sql = "SELECT * FROM `brands` WHERE id=$id";
        $statement = $this->conn->prepare($sql);
        $statement->execute();
        $result = $statement->fetchAll();
        return $result;
    }

    public function update($data)
    {
        $id = $data['id'];
        $title = $data['title'];
        $link = $_POST["link"];
        $modified_at = date('Y-m-d h:i:s', time());

        $editData = [
            'title'  =>  $title,
            'link'  =>  $link,
            'modified_at'  => $modified_at,
            'id'  =>  $id
        ];
        $sql = "UPDATE brands SET title=:title, link=:link, modified_at=:modified_at WHERE id=:id";
        $statement = $this->conn->prepare($sql);
        $result = $statement->execute($editData);
        return $result;
    }
    public function delete($data)
    {
        $id = $data["delete"];
        $sql = "DELETE FROM `brands` WHERE id=$id";
        $statement = $this->conn->prepare($sql);
        $result = $statement->execute();
        return $result;
    }

    public function view($data)
    {
        $id = $data["view"];
        $sql = "SELECT * FROM `brands` WHERE id=$id";
        $statement = $this->conn->prepare($sql);
        $statement->execute();
        $result = $statement->fetchAll();
        return $result;
    }
}
