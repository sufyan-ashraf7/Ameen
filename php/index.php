<?php
$name = "php book";
// embeding 
echo '<h1>'.$name.'</h1>';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <h1 style="color: blue;">this is second <?php echo $name?></h1>
</body>
</html>