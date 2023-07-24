<?php
session_start(); // Toujours inclure ceci au début de chaque page utilisant les sessions

// Détruire toutes les variables de session (déconnexion)
session_unset();
session_destroy();

// Redirection vers la page de connexion après la déconnexion
header('Location: connexion.php');
exit;
?>