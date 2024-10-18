<?php
include("components/header.php")
?>

  <!-- Blank Start -->
  <div class="container-fluid pt-4 px-4">
                <div class="row vh-100 bg-light rounded mx-0">
                    <div class="col-md-12  py-3">
                        <h3>All products</h3>
                        <table class="table px-3">
                                <thead>
                                    <tr>
                                        <th scope="col">id</th>
                                        <th scope="col">product Name</th>
                                        <th scope="col">product Quantity</th>
                                        <th scope="col">product Price</th>
                                        <th scope="col">product Category</th>
                                        <th scope="col">product Image</th>
                                        <th scope="col" colspan="2">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
<?php
$query = $pdo ->query("SELECT `products`.*, `categories`.`catName`
FROM `products` 
	inner JOIN `categories` ON `products`.`productCatId` = `categories`.`id`;");
$proRows = $query->fetchAll(PDO::FETCH_ASSOC);
foreach($proRows as $proValues){
    ?>
                                    <tr>
                                        <th scope="row"><?php echo $proValues['productId']?></th>
                                        <td><?php echo $proValues['productName']?></td>
                                        <td><?php echo $proValues['productQuantity']?></td>
                                        <td><?php echo $proValues['productPrice']?></td>
                                        <td><?php echo $proValues['catName']?></td>
                                        <td><img src="<?php echo $proImageAdress.$proValues['productImage']?>" width="80px"></td>
                                        <td><a href="updateproduct.php?pId=<?php echo $proValues['productId']?>" class="btn btn-outline-success">Edit</a></td>
                                        <td><a href="?proDelete=<?php echo $proValues['productId']?>" class="btn btn-outline-danger">Delete</a></td>

                                    </tr>
                                    <?php
}
?>
                                </tbody>
                            </table>

                    </div>
                </div>
            </div>
            <!-- Blank End -->
<?php
include("components/footer.php")
?>