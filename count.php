<?php 
    $text = file_get_contents('count.txt');
    file_put_contents('count.txt', $text + 1);
    // echo($text + 1);
?>
