<?php

require 'config.php';



do {


echo '===================================================;
============ Unity Care CLI: ======================;
===================================================;
1: Gestion du patients;
2: Gestion du Doctors;
3: Gestion du Departements;
4: Statistiques;
5: Quitter;
---------------------------------------------------';
$choix = readline("Votre choix :") ;


switch ($choix) {
    case "1":
        require_once "patients.php";
        break;
    case "2":
        require_once "doctors.php";
        break;
    case "3":
        require_once "department.php";
        break;
    case "4":
        require_once "statistiques.php";
        break;
    case "5":
        echo "Aux revoire";
        break;
    default:
        echo "invalid choix";


    }

} while ($choix !== 5);