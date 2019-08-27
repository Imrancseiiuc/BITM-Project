<?php

namespace team_extreme\Product;

use team_extreme\DataBase\Db;


class Product
{
    public $id = "";
    public $title = "";
    public $picture = "";
    public $mrp = "";
    public $short_description = "";
    public $color = "";
    public $size = "";
    public $modifies_at = "";

    public $conn = null;


    public function __construct()
    {
        $this->conn = Db::connect();
    }


    public function store($data, $files)
    {

        $fileName = $files['picture']['name'];
        $target = $files['picture']['tmp_name'];
        $destination = $_SERVER['DOCUMENT_ROOT'] . "/teamextreme-project/public/upload/" . $fileName;
        move_uploaded_file($target, $destination);
        $picture = $fileName;
        $sql = "INSERT INTO `products` ( `brand_id`, `lebel_id`, `title`, `picture`, `short_description`, `description`, `total_sales`,
`product_type`, `is_new`, `cost`, `mrp`, `special_price`, `soft_delete`, `is_draft`, `is_active`, `created_at`, `modifies_at`,
`color`, `size`) VALUES ( :brand_id, :lebel_id, :title, :picture, :short_description, :description, :total_sales, :product_type, :is_new, :cost, :mrp,
    :special_price,:soft_delete, :is_draft, :is_active , :created_at,:modifies_at, :color,:size)";
        $statement = $this->conn->prepare($sql);

        $statement->bindValue(':brand_id', null);
        $statement->bindValue(':lebel_id', null);
        $statement->bindValue(':title', $data['title']);
        $statement->bindValue(':picture', $picture);
        $statement->bindValue(':short_description', $data['short_description']);
        $statement->bindValue(':description', $data['description']);
        $statement->bindValue(':total_sales', null);
        $statement->bindValue(':product_type', null);
        $statement->bindValue(':is_new', null);
        $statement->bindValue(':cost', null);
        $statement->bindValue(':mrp', $data['mrp']);
        $statement->bindValue(':special_price', null);
        $statement->bindValue(':soft_delete', null);
        $statement->bindValue(':is_draft', null);
        $statement->bindValue(':is_active', null);
        $statement->bindValue(':created_at', date('Y-m-d h:i:s', time()));
        $statement->bindValue(':modifies_at', null);
        $statement->bindValue(':color', $data['color']);
        $statement->bindValue(':size', $data['size']);

        $result = $statement->execute();

        return $result;
    }

    public function view($data)
    {
        $id = $data["view"];
        $sql = "SELECT * FROM `products` WHERE id=$id";
        $statement = $this->conn->prepare($sql);
        $statement->execute();
        $result = $statement->fetchAll();
        return $result;
    }

    public function delete($data)
    {
        $id = $data["delete"];
        $sql = "DELETE FROM `products` WHERE id=$id";
        $statement = $this->conn->prepare($sql);
        $result = $statement->execute();
        return $result;
    }
    public function productList()
    {
        $sql = "SELECT * FROM `products`  ";
        $statement = $this->conn->prepare($sql);
        $statement->execute();
        $result = $statement->fetchAll();
        return $result;
    }
    public function edit($data)
    {
        $id = $data["edit"];
        $sql = "SELECT * FROM `products` WHERE id=$id";
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
        $title = $data['title'];
        $picture = $fileName;
        $mrp = $data['mrp'];
        $short_description = $data['short_description'];
        $description = $data['description'];
        $color = $data['color'];
        $size = $data['size'];
        $modifies_at = date('Y-m-d h:i:s', time());

        $editData = [
            'id' => $id,
            'title' => $title,
            'picture' => $picture,
            'mrp' => $mrp,
            'short_description' => $short_description,
            'description' => $description,
            'color' => $color,
            'size' => $size,
            'modifies_at' => $modifies_at
        ];
        $sql = "UPDATE products SET title=:title, picture=:picture, mrp=:mrp, short_description=:short_description ,description=:description ,color=:color,size=:size , modifies_at=:modifies_at WHERE id=:id";
        $statement = $this->conn->prepare($sql);
        $result = $statement->execute($editData);
        return $result;
    }
}
