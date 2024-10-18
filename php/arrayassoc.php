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
    <?php
    $stdDetail = [
        [
            "name" => "ali",
            "email"=>"ali@gmail.com",
            "course"=>"cpism",
            "fee"=>8500
        ],
        [
            "name" => "aliyan",
            "email"=>"aliyan@gmail.com",
            "course"=>"cpism",
            "fee"=>8500
        ],
        [
            "name" => "alishar",
            "email"=>"alishar@gmail.com",
            "course"=>"cpism",
            "fee"=>8500
        ],
        [
            "name" => "alisha",
            "email"=>"alishar@gmail.com",
            "course"=>"cpism",
            "fee"=>8500
        ],
        [
            "name" => "alishba",
            "email"=>"alishar@gmail.com",
            "course"=>"cpism",
            "fee"=>8500
        ],
    ];
    // // echo $stdDetail['name'];
    // for($i=0;$i<count($stdDetail);$i++){
    //     echo $stdDetail[$i].['name'];
    // }
    // foreach($stdDetail as $data){
    //     echo $data['name']." " ;
    //     echo $data['email']." " ;
    // }
   ?>
   <div
    class="table-responsive"
   >
    <table
        class="table table-primary"
    >
        <thead>
            <tr>
                <th scope="col">name</th>
                <th scope="col">email</th>
                <th scope="col">course</th>
                <th scope="col">fee</th>

            </tr>
        </thead>
        <tbody>
            <?php
            foreach($stdDetail as $data){
                ?>
                     <tr class="">
                <td scope="row"><?php echo $data['name']?></td>
                <td><?php echo $data['email']?></td>
                <td><?php echo $data['course']?></td>
                <td><?php echo $data['fee']?></td>
            </tr>
                <?php
            }
            ?>
       
            
        </tbody>
    </table>
   </div>
   
   <?php
    ?>
    </body>
</html>
