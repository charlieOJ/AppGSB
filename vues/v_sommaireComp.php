    <!-- Division pour le sommaire -->
    <div id="menuGauche">
     <div id="infosUtil">
    
        <h2>
    
</h2>
    
      </div>  
        <ul id="menuList">
			<li >
				  Comtpable :<br>
				<?php echo $_SESSION['prenomComp']."  ".$_SESSION['nomComp']  ?>
			</li>
           <li class="smenu">
              <a href="index.php?uc=voirFrais&action=modeRecherche" title="Voir fiche de frais ">Voir fiche de frais</a>
           </li>
           <li class="smenu">
              <a href="index.php?uc=modifierPaiement&action=selectionnerMois" title="Modifier paiement">Modifier payement</a>
           </li>
 	   <li class="smenu">
              <a href="index.php?uc=connexion&action=deconnexion" title="Se déconnecter">Déconnexion</a>
           </li>
         </ul>
        
    </div>
    