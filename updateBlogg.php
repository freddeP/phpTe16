<?php
 header("Content-type:application/json");

$oldContent = json_decode( file_get_contents("blogg.json") );
$formContent = $_POST;
$formContent['id'] = time();
$oldContent[] = $formContent;

file_put_contents("blogg.json", json_encode($oldContent));

header("Location: blogg.php");








