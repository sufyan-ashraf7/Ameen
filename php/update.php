<?php
include('connection.php');
?>
<!doctype html>
<html lang="en">
    <head>
        <title>Title</title>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"
        />

        <!-- Bootstrap CSS v5.2.1 -->
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
            crossorigin="anonymous"
        />
    </head>
<?php
if(isset($_GET['id'])){
$id = $_GET['id'];
$query = $pdo->prepare("select * from marksheet where id=:pid");
$query->bindParam("pid",$id);
$query->execute();
$data = $query->fetch(PDO::FETCH_ASSOC);
}
?>
    <body>
        <div class="container mt-5">
       <form action="" method="post">
        <input type="hidden" name="id" value="<?php echo $data['id']?>">
        <div class="mb-3">
            <label for="" class="form-label">name</label>
            <input
                type="text"
                name="name"
                id=""
                  class="form-control"
               value="<?php echo $data['name']?>"
            />
           
        </div>
        <div class="mb-3">
            <label for="" class="form-label">maths</label>
            <input
                type="number"
                name="maths"
                id=""
                class="form-control"
               value="<?php echo $data['maths']?>"
            />
           
        </div>
        <div class="mb-3">
            <label for="" class="form-label">physics</label>
            <input
                type="number"
                name="physics"
                id=""
                class="form-control"
              value="<?php echo $data['physics']?>"
            />
           
        </div>
        <div class="mb-3">
            <label for="" class="form-label">chemistry</label>
            <input
                type="number"
                name="chemistry"
                id=""
                class="form-control"
                value="<?php echo $data['chemistry']?>"
            />
           
        </div>
        <div class="mb-3">
            <label for="" class="form-label">urdu</label>
            <input
                type="number"
                name="urdu"
                id=""
                class="form-control"
               value="<?php echo $data['urdu']?>"
            />
           
        </div>
        <div class="mb-3">
            <label for="" class="form-label">english</label>
            <input
                type="number"
                name="english"
                id=""
                class="form-control"
         value="<?php echo $data['english']?>"
            />
           
        </div>
        <button
            type="submit"
            class="btn btn-outline-primary"
        name='update'
            >
            submmit
        </button>
        
       </form>
       
      <?php
      if(isset($_POST['update'])){
        $id = $_POST['id'];
      $name = $_POST['name'];
      $maths = $_POST['maths'];
      $chemistry = $_POST['chemistry'];
      $physics = $_POST['physics'];
      $urdu = $_POST['urdu'];
      $english = $_POST['english'];
      
$totalMarks = 500;
$obtain = $maths + $physics + $chemistry + $urdu + $english;
$percentage = $obtain/$totalMarks *100;
$grad = "";
$remarks = "";
if($percentage>= 80 && $percentage<=100){
    $grad = "A1";
    $remarks = "Excellent";
}else if($percentage>=70 && $percentage <80){
    $grad = "A";
$remarks = "Very Good";
}else if($percentage>=60 && $percentage<70){
    $grad = "B";
$remarks = "Good";
}else if($percentage >= 50 && $percentage <60 ){
    $grad = "C";
$remarks = "Fair";
}
else {
    $grad = "FAil";
$remarks = "Try Next";
}
$query = $pdo->prepare("update marksheet set name=:pn,maths=:pm,english=:pe,urdu=:pu,chemistry=:pc,physics=:pp,obtained=:po,percentage=:pper,grade=:pg,remarks=:pr where id = :pid");
$query->bindParam("pid",$id);
$query->bindParam("pn",$name);
$query->bindParam("pm",$maths);
$query->bindParam("pp",$physics);
$query->bindParam("pc",$chemistry);
$query->bindParam("pu",$urdu);
$query->bindParam("pe",$english);
$query->bindParam("po",$obtain);
$query->bindParam("pper",$percentage);
$query->bindParam("pg",$grad);
$query->bindParam("pr",$remarks);
$query->execute();
echo "<script>alert('update succsesfully');
location.assign('view.php');
</script>";
?>

<?php

      }
      ?>
       </div>
    </body>
</html>
