<?php include 'entete.php' ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <link  rel="stylesheet" href="fontawesome/css/all.min.css">
    <link rel="stylesheet" href="style.css">
    <title>Self</title>
</head>
<body class="self-body">
     <div class="self_container">
        <div class="filter">
           <h2>Filtre</h2>
           <p>filtré les produits selon votre choix</p>
           <div class="option-filter">
              <div class="frist-option"><label for="prix-top">Prix</label><input type="radio" name="filter" id="prix-top"><span class="fake-radio"></span></div>
              <div class="second-option"><label for="prix-bas">Prix</label><input type="radio" name="filter" id="prix-bas"><span class="fake-radio"></span></div>
              <div class="third-option"><label for="recent">Recent</label><input type="radio" name="filter" id="recent"><span class="fake-radio2"></span></div>
              <div class="quat-option"><label for="favoris">Favoris</label><input type="radio" name="filter" id="favoris"><span class="fake-radio3"></span></div>
           </div>
        </div>

        <div class="product-affich">
            
        </div>
     </div>
</body>
</html>