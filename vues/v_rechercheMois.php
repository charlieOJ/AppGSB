<div id="contenu">
    <h2>Selectionner un mois:</h2>
    
   <?php
   
   if (isset($_POST['valider'])){
        foreach($lesMois as $unMois){
            $_SESSION['mois']=$unMois['numMois'];
            $_SESSION['annee']=$unMois['numAnnee'];
        }
        header("Location:index.php?uc=voirFrais&action=resSearch&visiteur=".$_SESSION['idVisi']."&mois=".$_SESSION['mois']."&annee=".$_SESSION['annee']);
    }
   else{
   ?>
    
    <form method="POST" action="index.php?uc=voirFrais&action=recherche">
        <fieldset>
            <legend>Selectionner un mois:</legend>
            <select name='mois'>
                <?php
                foreach($lesMois as $unMois){
                    echo "<option name='mois' value='".$lesMois."'>".$unMois['numMois']."/".$unMois['numAnnee']."</option>";
                }
                ?>
            </select>
	<input type='submit' name='valider' value='ok'>
            
            
        </fieldset>
        
        
    </form>
<?php
   }
 ?>