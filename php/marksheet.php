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

    <body>
        <div class="container mt-5">
       <form action="" method="post">
        <div class="mb-3">
            <label for="" class="form-label">name</label>
            <input
                type="text"
                name="name"
                id=""
                class="form-control"
                placeholder="Enter your name"
                aria-describedby="helpId"
            />
           
        </div>
        <div class="mb-3">
            <label for="" class="form-label">maths</label>
            <input
                type="number"
                name="maths"
                id=""
                class="form-control"
                placeholder="enter your marks"
                aria-describedby="helpId"
            />
           
        </div>
        <div class="mb-3">
            <label for="" class="form-label">physics</label>
            <input
                type="number"
                name="physics"
                id=""
                class="form-control"
                placeholder="enter your marks"
                aria-describedby="helpId"
            />
           
        </div>
        <div class="mb-3">
            <label for="" class="form-label">chemistry</label>
            <input
                type="number"
                name="chemistry"
                id=""
                class="form-control"
                placeholder="enter your marks"
                aria-describedby="helpId"
            />
           
        </div>
        <div class="mb-3">
            <label for="" class="form-label">urdu</label>
            <input
                type="number"
                name="urdu"
                id=""
                class="form-control"
                placeholder="enter your marks"
                aria-describedby="helpId"
            />
           
        </div>
        <div class="mb-3">
            <label for="" class="form-label">english</label>
            <input
                type="number"
                name="english"
                id=""
                class="form-control"
                placeholder="enter your marks"
                aria-describedby="helpId"
            />
           
        </div>
        <button
            type="submit"
            class="btn btn-outline-primary"
        name='result'
            >
            submmit
        </button>
        
       </form>
       
      <?php
      if(isset($_POST['result'])){
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
$query = $pdo->prepare("insert into marksheet (name,maths,physics,chemistry,urdu,english,obtained,percentage,grade,remarks) values(:pn,:pm,:pp,:pc,:pu,:pe,:po,:pper,:pg,:pr)");
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
echo "<script>alert('data insert into table');
location.assign('view.php')
</script>";
?>

<?php

      }
      ?>
       </div>
    </body>
</html>
