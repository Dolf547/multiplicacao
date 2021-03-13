<?php

 $tab = $_POST['tab'];
 $contar = 1;

 while ($contar<=10){
    $result = $tab * $contar;
    echo ($tab."x".$contar."=".$result). "<br>";
    $contar++;


 }



?>