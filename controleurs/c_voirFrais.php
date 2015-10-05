<?php
    if(!isset($_REQUEST['action'])){
            $_REQUEST['action'] = 'voirFrais';
    }
    $action = $_REQUEST['action'];
    switch($action){
            case 'recherche':{
                include("vues/v_rechercheFrais.php");
                break;
            }
            
    }
