<?php
session_start();

// Tableau des redirections en fonction des rôles
$roleRedirects = array(
  'admin' => '/garageV.parrot/php/admin.php',
  'secretaire' => '/garageV.parrot/php/employé.php',
  'mecanicien' => '/garageV.parrot/php/employé.php',
  'peintre' => '/garageV.parrot/php/employé.php',
  'commercial' => '/garageV.parrot/php/employé.php',
  'carrossier' => '/garageV.parrot/php/employé.php',
);

// Vérifier si l'utilisateur est connecté en tant qu'employé
if (!isset($_SESSION['role']) || !array_key_exists($_SESSION['role'], $roleRedirects)) {
  header("Location: /garageV.parrot/pages/connexion.php");
    exit();
}

require '../php/header.php';

// Récupérer l'ID de l'utilisateur (peu importe le rôle)
$userId = $_SESSION['user_id'];

// Code spécifique à chaque rôle
if ($_SESSION['role'] === 'admin') {
    // Code pour l'administrateur
    // Utilisez $userId pour effectuer des opérations spécifiques pour l'administrateur
} elseif ($_SESSION['role'] === 'secretaire') {
    // Code pour la secrétaire
    // Utilisez $userId pour effectuer des opérations spécifiques pour la secrétaire
} elseif ($_SESSION['role'] === 'mecanicien') {
    // Code pour le mécanicien
    // Utilisez $userId pour effectuer des opérations spécifiques pour le mécanicien
} elseif ($_SESSION['role'] === 'carrossier') {
  // Ajoutez d'autres conditions pour les autres rôles
  // Utilisez $userId pour effectuer des opérations spécifiques pour le carrossier
} elseif ($_SESSION['role'] === 'peintre') {
  // Ajoutez d'autres conditions pour les autres rôles
  // Utilisez $userId pour effectuer des opérations spécifiques pour le peintre
} elseif ($_SESSION['role'] === 'commercial') {
  // Ajoutez d'autres conditions pour les autres rôles
  // Utilisez $userId pour effectuer des opérations spécifiques pour le commercial
}
?>
<h2>Bienvenue <?php echo $_SESSION['username']; ?></h2>
<!-- Contenu du tableau de bord de l'employé -->
  <section class="faq">
    <h2>Foire aux questions</h2>
      <div class="question">
        <h3>Question 1 : Quels sont les horaires d'ouverture du garage ?</h3>
        <p>Réponse : Le garage est ouvert du lundi au vendredi de 8h45 à 12h00 et de 14h00 à 18h00
                     Le samedi de 8h45 à 12h00.</p>
      </div>
      <div class="question">
        <h3>Question 2 : Comment prendre rendez-vous pour une réparation ?</h3>
        <p>Réponse : Vous pouvez prendre rendez-vous en nous appelant au 06 07 08 09 10 ou en utilisant notre formulaire
                     de contact en ligne.</p>
      </div>
      <!-- Ajoutez d'autres questions et réponses ici -->
  </section>

<?php require '../php/footer.php'; ?>
