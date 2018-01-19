<?php
session_start();

$title="Deconnexion";

include('includes/connexion.inc.php');
include('includes/haut.inc.php');
include('includes/bas.inc.php');
session_destroy();

if(!isset($_SESSION['pseudo']));
echo '<p>Vous êtes maintenant deconnecté</p>';

?>