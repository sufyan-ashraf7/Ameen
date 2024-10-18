<?php
include("components/header.php");

?>

<!-- category Start -->
<div class="container-fluid pt-4 px-4">
                <div class="row vh-100 bg-light rounded mx-0">
                    <div class="col-md-12 px-3 py-5">
                        <h3>Add product</h3>
                        <form method="post" enctype="multipart/form-data">
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Product Name</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1"
                                        aria-describedby="emailHelp" name="proName">
                                    <div id="emailHelp" class="form-text">
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Product Quantiy</label>
                                    <input type="number" class="form-control" id="exampleInputEmail1"
                                        aria-describedby="emailHelp" name="proQuantity">
                                    <div id="emailHelp" class="form-text">
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Product Price</label>
                                    <input type="number" class="form-control" id="exampleInputEmail1"
                                        aria-describedby="emailHelp" name="proPrice">
                                    <div id="emailHelp" class="form-text">
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Product Category</label>
                                    <select class="form-select" id="floatingSelect"
                                    aria-label="Floating label select example" name="proCatId">
                                    <option hidden selected>Open this select menu</option>
<?php
$query = $pdo ->query("select * from categories");
$catRow = $query->fetchAll(PDO::FETCH_ASSOC);
foreach($catRow as $catKeys){
    ?>
    
    <option value="<?php echo $catKeys['id']?>"><?php echo $catKeys['catName']?></option>
    <?php
}
?>
                                  
                              
                                </select>
                                    <div id="emailHelp" class="form-text">
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputPassword1" class="form-label">Product Image</label>
                                    <input type="file" class="form-control" id="exampleInputPassword1" name="proImage">
                                </div>

                                <button type="submit" class="btn btn-primary" name="addProduct">Add Product</button>
                            </form>
                    </div>
                </div>
            </div>
            <!-- category End -->
<?php
include("components/footer.php")
?>