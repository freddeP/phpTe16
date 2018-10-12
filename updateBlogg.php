<?php
 header("Content-type:application/json");

var_dump($_FILES);
$file = $_FILES['file'];
echo $file['tmp_name'];
$check1 = getimagesize($file['tmp_name']);

$target = "images/".$file['name'];

if($check1 != false)
{
    // om check1 är ickefalsk så tror vi att vi har en bild
    // och och bilden är mindre än 3Mb

    move_uploaded_file($file['tmp_name'],$target);
}
else echo "error";




$oldContent = json_decode( file_get_contents("blogg.json") );
$formContent = $_POST;
$formContent['id'] = time();
$formContent['imgurl'] = $target;
$oldContent[] = $formContent;

file_put_contents("blogg.json", json_encode($oldContent));

header("Location: blogg.php"); 








