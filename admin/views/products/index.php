<?php
include_once($_SERVER["DOCUMENT_ROOT"] . "/teamextreme-project/vendor/autoload.php");

use team_extreme\Utility\Utility;
use team_extreme\DataBase\Db;
use team_extreme\Product\Product;

Db::connect();
$product = new Product();
$products = $product->productList();


ob_start();
include_once($_SERVER["DOCUMENT_ROOT"] . Utility::AdminLayouts . "/default.php");
$layout = ob_get_contents();
ob_end_clean();
?>

<?php
ob_start();
?>



<div class="container-fluid p-0">
    <div class="text-center">
        <a href="<?php echo Utility::AdminWebView . "products/create.php" ?>" class="btn btn-success m-4">Add New Products</a>
    </div>

    <div class="productTable">
        <table class="table table-bordered text-center">
            <thead class="thead-dark">
                <tr>
                    <th id="id">Id</th>
                    <th id="title">Title</th>
                    <th id="picture">Picture</th>
                    <th id="mrp">MRP</th>
                    <th id="short_description">Short Description</th>
                    <th id="description">Description</th>
                    <th id="color">Color</th>
                    <th id="size">Size</th>
                    <th id="created_at">Created At</th>
                    <th id="modifies_at">Modified At</th>
                    <th id="action">Action</th>
                </tr>
            </thead>
            <?php
            foreach ($products as $row) {
                ?>
                <tbody>
                    <tr>
                        <td>
                            <?= $row['id']; ?>
                        </td>
                        <td>
                            <?= $row['title']; ?>
                        </td>
                        <td>
                            <img width="100px" height="100px" src="<?= "http://localhost/teamextreme-project/public/upload/" ?><?= $row['picture'] ?>">
                        </td>
                        <td>
                            $<?= $row['mrp']; ?>
                        </td>
                        <td class="align-middle">
                            <?= $row['short_description']; ?>
                        </td>
                        <td class="align-middle">
                            <?= $row['description']; ?>
                        </td>
                        <td>
                            <?= $row['color']; ?>
                        </td>
                        <td>
                            <?= $row['size']; ?>
                        </td>
                        <td>
                            <?= $row['created_at']; ?>
                        </td>
                        <td>
                            <?= $row['modifies_at']; ?>
                        </td>
                        <td>
                            <a href="view.php?view=<?= $row['id']; ?>" class="btn-info rounded px-1 mx-1">
                                <i class="fa fa-eye"></i>
                            </a>
                            <a href="edit.php?edit=<?= $row['id']; ?>" class="btn-secondary rounded px-1 mx-1">
                                <i class="fa fa-pencil-square-o"></i>
                            </a>
                            <a href="delete.php?delete=<?= $row['id']; ?>" class="btn-danger rounded px-1 mx-1">
                                <i class="fa fa-trash"></i>
                            </a>
                        </td>
                    </tr>
                </tbody>
            <?php
            }
            ?>
        </table>
    </div>
</div>


<?php
$pageContent = ob_get_contents();
ob_end_clean();
echo str_replace("##content##", $pageContent, $layout)
?>