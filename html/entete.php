<?php 
include '../back-end/connexion.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <link  rel="stylesheet" href="fontawesome/css/all.min.css">
    <link rel="stylesheet" href="style.css">
    <title>Entete</title>
</head>
<body class="body_entete">
    <div class="affich_contain">
       <header class="rech">
             <div class="logo">
             <i class="fa-solid fa-earth-africa "></i>
              <span>P-Tool Mobile</span>
            </div>

            <div class="search">
                <form action="/recherche" method="get" class="form-rech">
                    <input type="search" id="search-input" class="recherche" placeholder="Chercher sur P-tool">
                    <button type="submit" class="button-search">
                        <i class="fas fa-search"></i>
                    </button>
                </form>
            </div>

            <div class="nav-connect">
                <div class="s-connect">
                   <i class="fas fa-user-lock"></i>
                    <a href="">Connection</a>
                </div>

                <div class="s-inscript">
                    <i class="fas fa-user-plus"></i>
                    <a href="">Inscription</a>
                </div>
            </div>

            <div class="publish">
                <a href="form_tel.php">
                    <button class="publish">Publier une annonce</button>
                </a>
            </div>
       </header>
    </div>
</body>
</html>