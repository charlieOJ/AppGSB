<div id="contenu">
    <h2>Selectionner un mois:</h2>
    
   <?php
   
   if (isset($_POST['valider'])){
        
        header("Location:index.php?uc=voirFrais&action=resSearch&visiteur=".$_SESSION['idVisi']."&mois=".$_POST['mois']);
    }
   else{
   ?>
    
    <form method="POST" action="index.php?uc=voirFrais&action=recherche2&visiteur=<?php echo $_SESSION['idVisi']; ?>">
        <fieldset>
            <legend>Selectionner un mois:</legend>
            <select name='mois'>
                <?php
                foreach($lesMois as $unMois){
                    echo "<option name='mois' value='".$unMois['mois']."'>".$unMois['numMois']."/".$unMois['numAnnee']."</option>";
                }
                ?>
            </select>
	<input type='submit' name='valider' value='ok'>
            
            
        </fieldset>
        
        
    </form>
<?php
   }
 ?>