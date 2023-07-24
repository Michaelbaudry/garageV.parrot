<?php
session_start(); // Démarrer la session pour conserver l'authentification

// Vérifier si l'utilisateur est authentifié en tant qu'administrateur
if ($_SESSION['role'] !== 'admin') {
  // Redirection vers la page de connexion si l'utilisateur n'est pas authentifié en tant qu'administrateur
  header('Location: connexion.php');
  exit;
}

// Vérifier si le formulaire a été soumis et si l'email de l'employé à supprimer est présent
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['email'])) {
  // Récupérer l'email de l'employé à supprimer
  $email = $_POST['email'];

  // Connexion à la base de données
  $conn = mysqli_connect('localhost', 'root', 'root', 'garageparrot');
  if (!$conn) {
    die('Erreur de connexion à la base de données: ' . mysqli_connect_error());
  }

  // Supprimer l'employé de la base de données en utilisant son email comme critère
  $query = "DELETE FROM users WHERE email = '$email'";
  if (mysqli_query($conn, $query)) {
    echo "Employé supprimé avec succès!";
  } else {
    echo "Erreur lors de la suppression de l'employé: " . mysqli_error($conn);
  }

  // Fermer la connexion à la base de données
  mysqli_close($conn);

  

 
// Redirect back to the admin dashboard page after deleting the employee
  
 
header('Location: admin.php');
  exit;
} else {
  // Si l'email de l'employé à supprimer n'est pas présent, rediriger vers le tableau de bord de l'administrateur
  
 
header('Location: admin.php');
  exit;
}
?>