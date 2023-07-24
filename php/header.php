<?php
session_start();
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="/garageV.parrot/image/Garage V.parrot.png" type="image/png">
    <link rel="stylesheet" href="/garageV.parrot/style.css">
    <title>Garage V.Parrot</title>
</head>

<body>
<header class="header">
    <div class="menu-container">
      <nav class="menu">
        <ul class="menu">
          <li><a href="/garageV.parrot/index.php">Accueil</a></li>
          <li><a href="/garageV.parrot/pages/carrosserie.php">Carrosserie</a></li>
          <li><a href="/garageV.parrot/pages/mecanique.php">Mécanique</a></li>    
          <li><a href="/garageV.parrot/pages/vehicule-occasion.php">Véhicules d'occasion</a></li>
          <li><a id="scrollToDown">Contacts</a></li>
        </ul>
      </nav>
      
    </div>
    <div class="logo-container">
      <a href="/garageV.parrot/index.php"><img class="logo" src="/garageV.parrot/image/Garage V.parrot.png"alt="logo garage"></a>
    </div>
    <div class="connexion-container">
    <?php
          if (isset($_SESSION['role']) && isset($_SESSION['username'])) {
            // Afficher "Bienvenue [Nom d'utilisateur]" si l'utilisateur est connecté
            echo "Bienvenue " . $_SESSION['username'];
          }
        ?>
      </div>
      <div class="nav-links">
      <?php
        if (isset($_SESSION['role']) && $_SESSION['role'] === 'admin') {
        // Afficher un lien vers la page admin.php seulement pour l'administrateur
        echo '<a href="/garageV.parrot/php/admin.php">Tableau Admin</a>';
        }
          // Vérifier si l'utilisateur est connecté et si un lien de redirection est défini pour son rôle
          if (isset($_SESSION['role']) && $_SESSION['role'] === 'secretaire') {
            echo '<a href="/garageV.parrot/php/employé.php">FAQ</a>';
        }
          // Vérifier si l'utilisateur est connecté et si un lien de redirection est défini pour son rôle
          if (isset($_SESSION['role']) && $_SESSION['role'] === 'commercial') {
            echo '<a href="/garageV.parrot/php/employé.php">FAQ</a>';
        }
          // Vérifier si l'utilisateur est connecté et si un lien de redirection est défini pour son rôle
          if (isset($_SESSION['role']) && $_SESSION['role'] === 'mecanicien') {
            echo '<a href="/garageV.parrot/php/employé.php">FAQ</a>';
        }
          // Vérifier si l'utilisateur est connecté et si un lien de redirection est défini pour son rôle
          if (isset($_SESSION['role']) && $_SESSION['role'] === 'peintre') {
          echo '<a href="/garageV.parrot/php/employé.php">FAQ</a>';
        }
          // Vérifier si l'utilisateur est connecté et si un lien de redirection est défini pour son rôle
          if (isset($_SESSION['role']) && $_SESSION['role'] === 'carrossier') {
          echo '<a href="/garageV.parrot/php/employé.php">FAQ</a>';
        }
      ?>
      </div>
      <?php
      if (isset($_SESSION['role']) && isset($_SESSION['username'])) {
        // Afficher le bouton de déconnexion si l'utilisateur est connecté
        echo '<a href="/garageV.parrot/pages/deconnexion.php"><button class="connexion">Déconnexion</button></a>';
      } else {
        // Afficher le bouton de connexion s'il n'est pas connecté
        echo '<a href="/garageV.parrot/pages/connexion.php"><button class="connexion">Connexion</button></a>';
      }
      ?>
    </div>
</header>
<script src="/garageV.parrot/script.js"></script>
</body>
</html>


