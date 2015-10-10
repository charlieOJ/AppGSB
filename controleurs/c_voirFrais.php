<?php

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
                $_SESSION['idVisi']=$_GET['visiteur'];
                $_SESSION['mois']=$_GET['mois'];
                $_SESSION['annee']=$_GET['annee'];
                include("vues/v_resSearch.php");
                break;
            }
            
    }
