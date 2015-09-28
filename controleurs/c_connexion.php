<?php
if(!isset($_REQUEST['action'])){
	$_REQUEST['action'] = 'demandeConnexion';
}
$action = $_REQUEST['action'];
switch($action){
	case 'demandeConnexion':{
		include("vues/v_connexion.php");
		break;
	}
	case 'valideConnexion':{
		$login = $_REQUEST['login'];
		$mdp = $_REQUEST['mdp'];
		$type = $_REQUEST['type'];
                $visiteur = $pdo->getInfosVisiteur($login,$mdp,$type);
		if(!is_array( $visiteur)){
			ajouterErreur("Login ou mot de passe incorrect");
			include("vues/v_erreurs.php");
			include("vues/v_connexion.php");
		}
		else{
                    if($visiteur['type']=='visi'){
			$id = $visiteur['id'];
			$nom =  $visiteur['nom'];
			$prenom = $visiteur['prenom'];
                        $type= $visiteur ['type'];
			connecter($id,$nom,$prenom);
			include("vues/v_sommaire.php");
                    }
                    else {
                        $id = $visiteur['id'];
			$nomComp =  $visiteur['nom'];
			$prenomComp = $visiteur['prenom'];
                        $type= $visiteur ['type'];
			connecter($id,$nomComp,$prenomComp, $type);
			include("vues/v_sommaireComp.php");
                    }
		}
		break;
	}
	default :{
		include("vues/v_connexion.php");
		break;
	}
}
?>