<style>
 *{font-family:arial;
 }
div{width:400px;border:1px solid grey;}

</style>

<?php
// Hämta filens innehåll som sträng
$content = file_get_contents("blogg.json");
// gör om innehållet till array
$content = json_decode($content);

$content = array_reverse($content);

foreach($content as $val)
{
    ?>
        <div><h1>    <?php echo htmlentities($val->author); ?>     </h1>
        <p>     <?php echo htmlentities( $val->post ); ?>     </p></div>

    <?php
}