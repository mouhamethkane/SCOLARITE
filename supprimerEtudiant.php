<?php
//onnexion au serveur de BD et choix de la base
$conn = mysqli_connect("localhost", "root", "", "BB_SCO") or die(mysqli_error());
$code = $_GET['code'];
$requete = "delete from ETUDIANTS where (CODE=$code)";
//execution de la requete SQL
mysqli_query($requete) or die(mysqli_error());
header("location:afficherEtudiant.php");
?>