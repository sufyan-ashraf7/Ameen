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
            <label for="" class="form-label">percentage</label>
            <input
                type="text"
                name="percentage"
                id=""
                class="form-control"
                placeholder="Enter your percentage"
                aria-describedby="helpId"
            />
           
        </div>
        <button
            type="submit"
            class="btn btn-outline-primary"
        name='check'
            >
            click
        </button>
        
       </form>
       
       <?php
      if(isset($_POST['check'])){
        $per = $_POST['percentage'];
        if(empty($per)){
            ?>
            <div
                class="alert alert-danger mt-3"
                role="alert"
            >
                <strong>please enter your percentage first to check eligiblity criteria</strong> 
            </div>
            <?php
        }

       else if($per>90 && $per<=100){
            ?>
            <div
                class="alert alert-primary mt-3"
                role="alert"
            >
                <strong>yoy may eligible for taking addmission in pre-medical or pre-engineering or computer science or commerce or arts</strong> 
            </div>
            
            <?php
        }else if ($per> 80){
            ?>
 <div
                class="alert alert-primary mt-3"
                role="alert"
            >
                <strong>yoy may eligible for taking addmission in  pre-engineering or computer science or commerce or arts</strong> 
            </div>

            <?php
        }else if($per>70){
            ?>
             <div
                class="alert alert-primary mt-3"
                role="alert"
            >
                <strong>yoy may eligible for taking addmission in  computer science or commerce or arts</strong> 
            </div>
            <?php
        }else if($per > 60){
            ?>
             <div
                class="alert alert-primary mt-3"
                role="alert"
            >
                <strong>yoy may eligible for taking addmission in commerce or arts</strong> 
            </div>
            <?php
        }else if($per > 40){
            ?>
             <div
                class="alert alert-primary mt-3"
                role="alert"
            >
                <strong>yoy may eligible for taking addmission in arts</strong> 
            </div>
            
            <?php
        }else{
            ?>
            
            <div
                class="alert alert-danger mt-3"
                role="alert"
            >
                <strong>you may not eligible for taking addmission here</strong> 
            </div>
            <?php
        }
      } 
       ?>
       </div>
    </body>
</html>
