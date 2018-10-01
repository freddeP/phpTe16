<?php
 header("Content-type:application/json");
// Detta är en ARRAY!!!!!!!!!!!!!!!!!!!!!!!!!
// fast en hybrid mellan objekt och array
// kallad Associative Array
//var_dump($_POST);

/* foreach($_POST as $val)
{
    echo $val. "<hr>";

} */


$oldContent = json_decode( file_get_contents("blogg.json") );
$oldContent[] = $_POST;
var_dump($oldContent);
file_put_contents("blogg.json", json_encode($oldContent));
