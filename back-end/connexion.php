<?php 
$nom_base_donne = "ventetel";
$nom_serveur = "localhost";
$utilisateur = "root";
$motpass = "";

try {
  $connexion = new PDO("mysql:host=$nom_serveur; dbname=$nom_base_donne", $utilisateur, $motpass);
  $connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  return $connexion;
}catch (Exception $e) {
    die("erreur de connexion : ". $e->getMessage());
}
?>