<div id="contenu">
    <h2>Selectionner un visiteur:</h2>
    
   <?php
   
   if (isset($_POST['valider'])){
       header("Location:index.php?uc=voirFrais&action=recherche2&visiteur=".$_POST['visiteur']);
   }
   else{
   ?>
    
    <form method="POST" action="index.php?uc=voirFrais&action=recherche">
        <fieldset>
            <legend>Selectionner un visiteur:</legend>
            <select name='visiteur'>
                <?php
                
                foreach($lesVisiteurs as $unVisiteur){
                    echo "<option name='visiteur' value='".$unVisiteur->id."'>".$unVisiteur->nom." ".$unVisiteur->prenom."</option>";
                }
                ?>
            </select>
	<input type='submit' name='valider' value='ok'>
            
            
        </fieldset>
        
        
    </form>
<?php
   }
 ?>