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
       $collection = [
        ['ali','dism','ali@gmail.com',57876],
        ['aliyan','dism','ali@gmail.com',57876],
        ['alishar','dism','ali@gmail.com',57876],
        ['alishba','dism','ali@gmail.com',57876],
        ['aliza','dism','ali@gmail.com',57876],
        ['alina','dism','ali@gmail.com',57876],
        ['aliyar','dism','ali@gmail.com',57876],

       ];
       ?>
       <table class="table">
<?php 
 for($i=0;$i<count($collection);$i++){
    if($i%2==0){
        ?>
        
        <tr class="table">

<?php
        for($j=0;$j<count($collection[$i]);$j++){
            ?>
        <td><?php echo $collection[$i][$j]?></td>
      
        <?php
         }
        ?>
    </tr>
        <?php
    }else{
        ?>
         <tr>

<?php
        for($j=0;$j<count($collection[$i]);$j++){
            ?>
        <td><?php echo $collection[$i][$j]?></td>
      
        <?php
         }
        ?>
    </tr>
        <?php
    }
  
}
?>
        
       </table>
      
    </body>
</html>

