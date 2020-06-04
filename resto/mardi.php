<?php

include "config.php";
include "contenu.php";
$menu_a_afficher =$contenuSite["menus"]["mardi"];

$titre = "Menu du Mardi";

$entree = "Oeufs à la diable mousse surimi";
$plat = "Gratin dauphinois";
$dessert = "crème brulée";

$title_page = $titre;

include $_dossier_template  . "page_menu_du_jour.php";
