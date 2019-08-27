<?php
include_once($_SERVER["DOCUMENT_ROOT"] . "/teamextreme-project/vendor/autoload.php");

use team_extreme\Utility\Utility;
use team_extreme\DataBase\Db;
use team_extreme\Cart\Cart;

Db::connect();
$cart = new Cart();
$carts = $cart->cartList();

ob_start();
include_once($_SERVER["DOCUMENT_ROOT"] . Utility::AdminLayouts . "/default.php");
$layout = ob_get_contents();
ob_end_clean();
?>

<?php
ob_start();
?>



<div class="container-fluid p-0">
    <div>
        <div class="text-center my-5">
            <a href="create.php" class="btn btn-success">Add new Cart</a>
        </div>


        <div class="categoriessTable">
            <table class="table table-striped text-center">
                <thead class="thead-dark">
                    <tr>
                        <th id="id">ID</th>
                        <th id="name">Sl Id</th>
                        <th id="link">Product Id</th>
                        <th id="link">Picture</th>
                        <th id="link">Product Title</th>
                        <th id="link">Quantity</th>
                        <th id="link">Unit Price</th>
                        <th id="link">Total Price</th>
                        <th id="action">Actions</th>

                    </tr>
                </thead>
                <tbody>
                    <?php

                    foreach ($carts as $row) {
                        ?>

                        <tr>
                            <th><?php echo $row['id'] ?></th>
                            <td><?php echo $row['sid'] ?> </td>
                            <td><?php echo $row['product_id'] ?></td>
                            <td><?php echo $row['picture'] ?></td>
                            <td><?php echo $row['product_title'] ?></td>
                            <td><?php echo $row['qty'] ?></td>
                            <td><?php echo $row['unit_price'] ?></td>
                            <td><?php echo $row['total_price'] ?></td>


                            <td>
                                <a href="view.php?view=<?php
                                                        echo $row['id'];
                                                        ?>" class="btn-info rounded px-1 mx-1"><i class="fa fa-eye"></i></a>
                                <a href="edit.php?edit=<?php
                                                        echo $row['id'];
                                                        ?>" class="btn-secondary rounded px-1 mx-1"><i class="fa fa-pencil-square-o"></i></a>
                                <a href="delete.php?delete=<?php
                                                            echo $row['id'];
                                                            ?>" class="btn-danger rounded px-1 mx-1"><i class="fa fa-trash"></i></a>
                            </td>
                        </tr>

                    <?php    } ?>

                </tbody>
            </table>
        </div>
    </div>
</div>


<?php
$pageContent = ob_get_contents();
ob_end_clean();
echo str_replace("##content##", $pageContent, $layout)
?>