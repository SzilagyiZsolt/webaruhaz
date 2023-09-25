<?php 
    require_once("card.php");
    switch ($button) {
        case 'kocsi1':
            require_once("kocsi1.php") ;
            break;
        case 'kocsi2':
            require_once("kocsi2.php") ;
            break;
        case 'kocsi3':
            require_once("kocsi3.php") ;
            break;
        case 'kocsi4':
            require_once("kocsi4.php") ;
            break;
        case 'kocsi5':
            require_once("kocsi5.php") ;
            break;
        default:
            echo "Üdvözöljük";
            break;
    }
?>