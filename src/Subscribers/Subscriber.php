<?php


namespace team_extreme\Subscribers;

use team_extreme\DataBase\Db;

class Subscriber
{
    public $conn = null;

    public function __construct()
    {
        $this->conn = Db::connect();
    }

    public function store($data)
    {
        $sql = "INSERT INTO `subscribers` (email, is_subscribed, created_at, modified_at, reason)
VALUES (:email, :is_subscribed, :created_at, :modified_at, :reason)";

        $statement = $this->conn->prepare($sql);

        $statement->bindValue(':email', $data['email']);
        $statement->bindValue(':is_subscribed', null);
        $statement->bindValue(':created_at', date('Y-m-d h:i:s', time()));
        $statement->bindValue(':modified_at', null);
        $statement->bindValue(':reason', null);

        $result = $statement->execute();
        return $result;
    }
    public function subscriberList()
    {
        $sql = "SELECT * FROM `subscribers`  ";
        $statement = $this->conn->prepare($sql);
        $statement->execute();
        $result = $statement->fetchAll();
        return $result;
    }

    public function edit($data)
    {
        $id = $data["edit"];
        $sql = "SELECT * FROM `subscribers` WHERE id=$id";
        $statement = $this->conn->prepare($sql);
        $statement->execute();
        $result = $statement->fetchAll();
        return $result;
    }

    public function update($data)
    {

        $id = $data['id'];
        $email = $data["email"];
        $modified_at = date('Y-m-d h:i:s', time());

        $editData = [
            'id'  =>  $id,
            'email'  =>  $email,
            'modified_at'  => $modified_at,
        ];
        $sql = "UPDATE `subscribers` SET email=:email, modified_at=:modified_at WHERE id=:id";
        $statement = $this->conn->prepare($sql);
        $result = $statement->execute($editData);
        return $result;
    }
    public function delete($data)
    {
        $id = $data["delete"];
        $sql = "DELETE FROM `subscribers` WHERE id=$id";
        $statement = $this->conn->prepare($sql);
        $result = $statement->execute();
        return $result;
    }

    public function view($data)
    {
        $id = $data["view"];
        $sql = "SELECT * FROM `subscribers` WHERE id=$id";
        $statement = $this->conn->prepare($sql);
        $statement->execute();
        $result = $statement->fetchAll();
        return $result;
    }
}
