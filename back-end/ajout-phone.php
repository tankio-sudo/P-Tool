<?php  
include 'connexion.php';

if($_SERVER['SEVER_METHOD'] === 'POST') {
    $nom = $_POST['nom'];
    $prix = $_POST['prix'];
    $capacite = $_POST['capacite'];
    $etat = $_POST['etat'];
    $description = $_POST['description'];

    $sql = "INSERT INTO produit (nom, prix, capacite, etat, description)
            VALUE (:nom, :prix, :capacite, :etat, :description)";
    $stmt = $connexion->prepare($sql);
    
    try {
        $stmt->execute([
            ':nom' => $nom,
            ':prix' => $prix,
            ':capacite' => $capacite,
            ':etat' => $etat,
            ':description' => $description
        ]);

        header("location: ../html/self.php?success=1");
        exit();
    } catch(PDOException $e) {
        die("❌ Erreur lors de l'ajout du produit : " . $e->getMessage());
    } 
}

?>