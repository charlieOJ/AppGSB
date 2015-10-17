<?php
include("vues/v_sommaireComp.php");
    if(!isset($_REQUEST['action'])){
            $_REQUEST['action'] = 'voirFrais';
    }
    $action = $_REQUEST['action'];
    switch($action){
            case 'recherche':{
                require_once ("include/class.pdogsb.inc.php");
                $lesVisiteurs=$pdo->getLesVisiteurs();
                include("vues/v_rechercheVisiteur.php");
                break;
            }
            case 'recherche2':{
                require_once ("include/class.pdogsb.inc.php");
                $_SESSION['idVisi']=$_GET['visiteur'];
                $lesMois=$pdo->getLesMoisDisponibles($_SESSION['idVisi']);
                include("vues/v_rechercheMois.php");
                break;
            }
            case 'resSearch':{
                require_once ("include/class.pdogsb.inc.php");
                $_SESSION['idVisi']=$_GET['visiteur'];
                $_SESSION['leMois']=$_GET['mois'];
                $lesInfoFicheFrais=$pdo->getLesInfosFicheFrais($_SESSION['idVisi'],$_SESSION['leMois']);
                //$lesMois=$pdo->getLesMoisDisponibles($_SESSION['idVisi']);
                include("vues/v_resSearch.php");
                break;
            }
            
    }
