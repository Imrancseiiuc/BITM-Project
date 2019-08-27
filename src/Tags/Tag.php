<?php


namespace team_extreme\Tags;

use team_extreme\DataBase\Db;



class Tag
{

    public $conn = null;


    public function __construct()
    {
        $this->conn = Db::connect();
    }
    public function store($data)
    {
        $sql = "INSERT INTO `tags` (`title`) VALUES (:title)";

        $statement = $this->conn->prepare($sql);

        $statement->bindValue(':title', $data['title']);

        $result = $statement->execute();
        return $result;
    }
    public function tagsList()
    {
        $sql = "SELECT * FROM `tags`  ";
        $statement = $this->conn->prepare($sql);
        $statement->execute();
        $result = $statement->fetchAll();
        return $result;
    }

    public function edit($data)
    {
        $id = $data["edit"];
        $sql = "SELECT * FROM `tags` WHERE id=$id";
        $statement = $this->conn->prepare($sql);
        $statement->execute();
        $result = $statement->fetchAll();
        return $result;
    }

    public function update($data)
    {
        $id = $data['id'];
        $title = $data['title'];

        $editData = [
            'id'  =>  $id,
            'title'  =>  $title
        ];
        $sql = "UPDATE `tags` SET title=:title WHERE id=:id";
        $statement = $this->conn->prepare($sql);
        $result = $statement->execute($editData);
        return $result;
    }
    public function delete($data)
    {
        $id = $data["delete"];
        $sql = "DELETE FROM `tags` WHERE id=$id";
        $statement = $this->conn->prepare($sql);
        $result = $statement->execute();
        return $result;
    }

    public function view($data)
    {
        $id = $data["view"];
        $sql = "SELECT * FROM `tags` WHERE id=$id";
        $statement = $this->conn->prepare($sql);
        $statement->execute();
        $result = $statement->fetchAll();
        return $result;
    }
}
