<?php
include "config.php";
include "contenu.php";

//var_dump($contenuSite);
$menu_a_affichier = $contenuSite["menus"]["lundi"];
$titre = "Menu du lundi";
$entree = "Velouté de courgette";
$plat = "Saumon teriyaki aux légumes";
$dessert = "Gatêau au chocolat";

$title_page = $titre;

include $_dossier_template  . "page_menu_du_jour.php";
