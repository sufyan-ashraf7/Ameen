<?php
include('connection.php');
$catImageAdress = "img/categories/";
$proImageAdress = "img/products/";

// categories
if(isset($_POST['addCategory'])){
    $catName = $_POST['categoryName'];
$catImage = $_FILES['categoryImage']['name'];
$catTmpName = $_FILES['categoryImage']['tmp_name'];
$extension = pathinfo($catImage,PATHINFO_EXTENSION);
$des = 'img/categories/'.$catImage;
if($extension == "jpg" || $extension == "png" || $extension == "jpeg" || $extension == "webp"){
    if(move_uploaded_file($catTmpName,$des)){
        $query = $pdo -> prepare("insert into categories (catName,catImage) values(:pn,:pi)");
        $query->bindParam("pn",$catName);
        $query->bindParam("pi",$catImage);
        $query->execute();
        echo "<script>alert('category added')</script>";

    }
}
}
// category update
if(isset($_POST['updateCategory'])){
 $cid = $_POST['catId'];      
 $catName = $_POST['categoryName'];
if(!empty($_FILES['categoryImage']['name'])){
    $catImage = $_FILES['categoryImage']['name'];
$catTmpName = $_FILES['categoryImage']['tmp_name'];
$extension = pathinfo($catImage,PATHINFO_EXTENSION);
$des = 'img/categories/'.$catImage;
if($extension == "jpg" || $extension == "png" || $extension == "jpeg" || $extension == "webp"){
    if(move_uploaded_file($catTmpName,$des)){
        $query = $pdo -> prepare("update categories set catName = :pn, catImage = :pi where id = :pid");
        $query->bindParam("pid",$cid);
        $query->bindParam("pn",$catName);
        $query->bindParam("pi",$catImage);
        $query->execute();
        echo "<script>alert('category update');
        location.assign('viewcategory.php')
        </script>";

    }
}
}else{
    $query = $pdo -> prepare("update categories set catName = :pn where id = :pid");
    $query->bindParam("pid",$cid);
    $query->bindParam("pn",$catName);
    $query->execute();
    echo "<script>alert('category update');
    location.assign('viewcategory.php')
    </script>";
}
}
// delete categories
if(isset($_GET['catDelete'])){
    $catId = $_GET['catDelete'];
    $query = $pdo->prepare("delete from categories where id = :pid");
    $query->bindParam("pid",$catId);
    $query->execute();
    echo "<script>
    alert('category deleted from table');
    location.assign('viewcategory.php')
    </script>";
}
// add product 
if(isset($_POST['addProduct'])){
    $pName = $_POST['proName'];
    $pQuantity = $_POST['proQuantity'];
    $pPrice = $_POST['proPrice'];
    $pCatId = $_POST['proCatId'];
$pImageName = $_FILES['proImage']['name'];
$pTMPImageName = $_FILES['proImage']['tmp_name'];
$extension = pathinfo($pImageName,PATHINFO_EXTENSION);
$filePath = 'img/products/'.$pImageName;
if($extension == "jpg" || $extension =="png" || $extension == "jpeg" || $extension == "webp"){
    if(move_uploaded_file($pTMPImageName,$filePath)){
        $query = $pdo ->prepare("insert into products (productName,productPrice,productQuantity,productImage,productCatId) values(:pn,:pp,:pq,:pi,:pcid )");
        $query->bindParam("pn",$pName);
        $query->bindParam("pp",$pPrice);
        $query->bindParam("pq",$pQuantity);
        $query->bindParam("pcid",$pCatId);
        $query->bindParam("pi",$pImageName);
$query->execute();
echo "<script>
alert('product added into table');
location.assign('viewproduct.php');
</script>";

    }
}else{
 echo "<script>alert('file extension must only be jpg,png,jpeg or webp')</script>";

}


}
if(isset($_POST['updateProduct'])){
    $pId = $_POST['pId'];
    $pName = $_POST['proName'];
    $pQuantity = $_POST['proQuantity'];
    $pPrice = $_POST['proPrice'];
    $pCatId = $_POST['proCatId'];
    if(!empty($_FILES['proImage']['name'])){
        $pImageName = $_FILES['proImage']['name'];
$pTMPImageName = $_FILES['proImage']['tmp_name'];
$extension = pathinfo($pImageName,PATHINFO_EXTENSION);
$filePath = 'img/products/'.$pImageName;
if($extension == "jpg" || $extension =="png" || $extension == "jpeg" || $extension == "webp"){
    if(move_uploaded_file($pTMPImageName,$filePath)){
        $query = $pdo ->prepare("update products set productName = :pn,productPrice = :pp , productQuantity = :pq , productCatId = :pcid , productImage=:pi where productId = :pid");
        $query->bindParam("pid",$pId);
        $query->bindParam("pn",$pName);
        $query->bindParam("pp",$pPrice);
        $query->bindParam("pq",$pQuantity);
        $query->bindParam("pcid",$pCatId);
        $query->bindParam("pi",$pImageName);
$query->execute();
echo "<script>
alert('product update into table');
location.assign('viewproduct.php');
</script>";

    }
}else{
 echo "<script>alert('file extension must only be jpg,png,jpeg or webp')</script>";

}

    }else{
        $query = $pdo ->prepare("update products set productName = :pn,productPrice = :pp , productQuantity = :pq , productCatId = :pcid where productId = :pid");
        $query->bindParam("pid",$pId);
        $query->bindParam("pn",$pName);
        $query->bindParam("pp",$pPrice);
        $query->bindParam("pq",$pQuantity);
        $query->bindParam("pcid",$pCatId);
$query->execute();
echo "<script>
alert('product update into table');
location.assign('viewproduct.php');
</script>";
    }
}
// delete products
if(isset($_GET['proDelete'])){
    $pid = $_GET['proDelete'];
    $query = $pdo ->prepare("delete from products where productId = :pid");
    $query->bindParam("pid",$pid);
    $query->execute();
    echo "<script>alert('product deleted successfully');
    location.assign('viewproduct.php');
    </script>";
 
}
?>