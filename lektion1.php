<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    

<?php

    $fileContent = file_get_contents("blogg.json");
    $fileContent = json_decode($fileContent);
    var_dump($fileContent);


    echo "<h1>Comments</h1>";
    foreach($fileContent as $val)
    {
       echo "<h3>";
       echo $val->author;
       echo "</h3>";
       echo "<p>";
       echo $val->post;
       echo "</p>";
    }


?>

</body>
</html>