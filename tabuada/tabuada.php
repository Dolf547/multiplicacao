<?php
        $tab = $_POST['tab'];
        $cont = 1;


        while ($cont <= 10){
            $resultado = $tab * $cont;
            echo ($tab."x".$cont." = ".$resultado)."<br>";
            $cont++;
                }   
            

?>