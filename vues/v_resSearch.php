<?php
        ECHO $_SESSION['idVisi'];
        
        foreach($lesInfoFicheFrais as $uneInfoFicheFrais){
            $idEtat=$uneInfoFicheFrais['idEtat'];
            echo $idEtat;
        }
   
?>