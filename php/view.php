<?php
include('connection.php')
?>
<!doctype html>
<html lang="en">
    <head>
        <title>
            
        </title>
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
     <h1 class="text-info text-center mt-5">read data from database</h1>
     <div class="container">
     <div
    class="table-responsive"
>
    <table
        class="table table-primary"
    >
        <thead>
            <tr>
                <th scope="col">Name</th>
                <th scope="col">Maths</th>
                <th scope="col">Physics</th>
                <th scope="col">Chemistry</th>
                <th scope="col">Urdu</th>
                <th scope="col">English</th>
                <th scope="col">Total</th>
                <th scope="col">Obtained</th>
                <th scope="col">Percentage</th>
                <th scope="col">Grade</th>
                <th scope="col">Remarks</th>
                <th colspan=2>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php  
          
            $query = $pdo->query("select * from marksheet");
            $row  = $query->fetchAll(PDO::FETCH_ASSOC);
            foreach($row as $value){
?>


<tr class="">
                <td scope="row"><?php echo $value['name']; ?></td>
                <td><?php echo $value['maths']; ?></td>
                <td><?php echo $value['physics']; ?></td>
                <td scope="row"><?php echo $value['chemistry']; ?></td>
                <td><?php echo $value['urdu']; ?></td>
                <td><?php echo $value['english']; ?></td>
                <td scope="row"><?php echo $value['total']; ?></td>
                <td><?php echo $value['obtained']; ?></td>
                <td><?php echo $value['percentage']; ?>%</td>
                <td><?php echo $value['grade']; ?></td>
                <td><?php echo $value['remarks']; ?></td>
                <td><a href="update.php?id=<?php echo $value['id']?>" class="btn btn-success">Edit</a></td>
                <td><a href="?deleteId=<?php echo $value['id']?>" class="btn btn-danger">Delete</a></td>


            </tr>
<?php
            }
            if(isset($_GET['deleteId'])){
                $id = $_GET['deleteId'];
                $query = $pdo->prepare("delete from marksheet where id = :pid");
                $query->bindParam("pid",$id);
                $query->execute();
                echo "<script>
                alert('data deleted successfully');
                location.assign('view.php');
                </script>";
            }
            ?>
          
          
        </tbody>
    </table>
</div>
     </div>
    </body>
</html>

