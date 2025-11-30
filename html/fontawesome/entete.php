<?php 
session_start();
include 'connexion.php';
//requete pour recuperer mes produits
$sql = "SELECT * FROM produit";
$result = $connexion->query($sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="style.css"> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <link  rel="stylesheet" href="fontawesome/css/all.min.css">
</head>
<body>
   <div class="search_container">  
  <menu type="toolbar"class="toolbar">
     <div class="page-title">
        <div class="nom_sidebar">
            <i class="fa-solid fa-earth-africa "></i>  
         Ideal <span class = "gold">AFRIQUE</span>
        </div>        
        <div class="sous-page-title">achete facilement, vente rapide</div>
    </div>
    <div class="search-global">
        <form action="/recherche" method="get" class="recherche">
            <input type="search" id="search-input" name="q" class="search" placeholder="recherche...">
            <button type="submit" class="button-recherche">
                <i class="fas fa-search"></i>
            </button>    
        </form>
</div>
<div class="inscription">
    <i class="fas fa-user-plus"></i>
    <li class="inscript"><a href="#"> Inscription</a></Li>   
</div>   
<div class="connection">
    <i class="fa-solid fa-user"></i>
    <li class="connect-site"><a href="#"> Se connecter</a></Li>   
</div>   
   </div>
  </menu>
  <menu type="toolbar" class="toolbar2">
    <div>
       <li><a href="acceuil.php"class="acceuil"> Acceuil</a></li>
    </div>
</menu>

<div class="categorie_container">
       <?php
$stmt = $connexion->query("SELECT * FROM produit"); 
$produits = $stmt->fetchAll(PDO::FETCH_ASSOC);

if (count($produits) > 0) {
    foreach ($produits as $row) {
        ?> 
    <div class="first_cat">
          <div>
             <div class="price-iphone"><p> <?php echo $row['prix']; ?> FCFA</p></div>
            <div class="second-object"><?php echo $row['nom'];?>-<?php echo $row['capacite']; ?>
           
          </div>
        <?php
    }
} else {
    echo "Aucun produit trouvé";
}
?>
    </div>
</div>
    </div>

  </menu>
</body>
</html>
