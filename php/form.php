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
       <div class="container">
       <form action="" method="post">
       <div class="mb-3">
            <label for="" class="form-label">Name</label>
            <input
                type="text"
                name="username"
                id=""
                class="form-control"
                placeholder=""
            
            />
           
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Email</label>
            <input
                type="text"
                name="userEmail"
                id=""
                class="form-control"
                placeholder=""
            
            />
           
        </div><div class="mb-3">
            <label for="" class="form-label">Qualification</label>
            <input
                type="text"
                name="userQualification"
                id=""
                class="form-control"
                placeholder=""
            
            />
           
        </div>
      <button
        type="submit"
        class="btn btn-primary"
        name="submitData"
      >
        Button
      </button>
      
       </form>
        
       </div>
    </body>
</html>

        <?php
if(isset($_POST['submitData'])){
    
$username = $_POST['username'];
$useremail=$_POST['userEmail'];
$userqualification=$_POST['userQualification'];
?>
<div class="container mt-5">
<div
    class="table-responsive"
>
    <table
        class="table table-primary"
    >
        <thead>
            <tr>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Qualification</th>
            </tr>
        </thead>
        <tbody></tbody>
    <tr class="">
                <td scope="row"><?php echo $username?></td>
                <td scope="row"><?php echo $useremail?></td>
                <td scope="row"><?php echo $userqualification?></td>
            </tr>
<?php
}
?>
          
            
        </tbody>
    </table>
</div>
</div>


