<?php

if(isset($_GET['id']) && $_GET['id'] != null )
{
    $id =  $_GET['id'];

    // hämta filen
    $content = file_get_contents("blogg.json");

    // gör om till json-obj/array
    $content = json_decode($content);

    $index  = "";

    foreach($content as $key => $val)
    {
        if($id == $val->id)
        { 
        // echo "found it!!!   " ;
            $index = $key;
            break;
        }  
    // echo $key. " - ".$val->id."<hr>";
    }

    unset($content[$index]);
    $content = array_values($content);
    $content = json_encode($content);

    file_put_contents("blogg.json",$content);

}

header("Location:blogg.php");
