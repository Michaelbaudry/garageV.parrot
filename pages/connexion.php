<?php
require '../php/header.php';
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

// Vérification des informations de connexion
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Connexion à la base de données (assurez-vous d'ajuster les paramètres selon votre configuration)
    $conn = mysqli_connect('localhost', 'root', 'root', 'garageparrot');
    if (!$conn) {
        die('Erreur de connexion à la base de données: ' . mysqli_connect_error());
    }

    // Vérification des identifiants de connexion
    $query = "SELECT * FROM users WHERE email = '$email' AND password = '$password'";
    $result = mysqli_query($conn, $query);

    $rows = mysqli_num_rows($result);
    echo mysqli_info($conn);

    if ($rows > 0) {
        // Les identifiants sont valides
        $user = mysqli_fetch_assoc($result);

        if ($user['email'] === $email && isset($roleRedirects[$user['role']])) {
            // Définir les données de session pour l'utilisateur
            $_SESSION['role'] = $user['role'];
            $_SESSION['username'] = $user['name'];

            // Redirection vers la page correspondant au rôle de l'utilisateur
            $redirectUrl = $roleRedirects[$user['role']];
            header("Location: $redirectUrl");
            exit();
        } else {
            // Gérer le cas où le rôle n'est pas défini ou ne correspond à aucune redirection
            echo 'Rôle inconnu ou redirection non définie pour ce rôle.';
        }
    } else {
        // Identifiants invalides, affichage d'un message d'erreur
        echo 'Identifiants de connexion invalides.';
    }

    // Fermeture de la connexion à la base de données
    mysqli_close($conn);
}
?>

<h2>Connexion</h2>
<div class="form-i">
    <form class="inscription" method="POST" action="connexion.php">
        <label for="email">Email:</label><br>
        <input type="email" name="email" id="email"><br>
        <label for="password">Mot de passe:</label><br>
        <input type="password" name="password" id="password"><br>
        <input type="submit" value="Se connecter">
    </form>
</div>

<?php require '../php/footer.php'?>


