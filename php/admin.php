<?php
session_start(); // Toujours inclure ceci au début de chaque page utilisant les sessions

// Vérifiez si l'utilisateur est connecté en tant qu'administrateur
if (isset($_SESSION['role']) && $_SESSION['role'] === 'admin') {
  // L'utilisateur est connecté en tant qu'administrateur, vous pouvez afficher les informations ou le contenu réservé à l'administrateur ici.
} else {
  // Redirection vers la page de connexion si l'utilisateur n'est pas connecté en tant qu'administrateur
  header('Location: connexion.php');
  exit;
}

// Connexion à la base de données
$conn = mysqli_connect('localhost', 'root', 'root', 'garageparrot');
if (!$conn) {
  die('Erreur de connexion à la base de données: ' . mysqli_connect_error());
}

// Traitement du formulaire de création de compte
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  // ... (votre code pour la création d'un nouveau compte employé)
}

// Récupérer la liste des employés déjà créés
$query = "SELECT id, name, email, role FROM users";
$result = mysqli_query($conn, $query);

if (!$result) {
  echo "Erreur lors de la récupération des employés: " . mysqli_error($conn);
} else {
  $employees = mysqli_fetch_all($result, MYSQLI_ASSOC);
}
require '../php/header.php'?>

<h2>Bienvenue <?php echo $_SESSION['username']; ?></h2>

<h2>Tableau de bord de l'administrateur</h2>
<!-- Formulaire de création de compte employé -->
<div class="form-container">
  <form method="POST" action="admin.php">
    <label for="name">Name:</label><br>
    <input type="text" name="name" id="name" required><br>
    <label for="email">Email:</label><br>
    <input type="email" name="email" id="email" required><br>
    <label for="password">Mot de passe:</label><br>
    <input type="password" name="password" id="password" required><br>
    <label for="role">Rôle:</label><br>
    <select name="role" id="role" required>
      <option value="secretaire">Secrétaire</option>
      <option value="mecanicien">Mécanicien</option>
      <option value="peintre">Peintre</option>
      <option value="carrossier">Carrossier</option>
      <option value="commercial">Agent Commercial</option>
    </select><br>
    <br>
    <input type="submit" value="Créer un compte employé">
  </form>
</div>

<!-- Tableau des employés déjà créés -->
<div class="employees-table">
  <h3>Liste des employés :</h3>
  <table>
    <tr>
      <th>ID</th>
      <th>Nom</th>
      <th>Email</th>
      <th>Rôle</th>
      <th>Actions</th>
    </tr>
    <?php foreach ($employees as $employee) : ?>
      <tr>
        <td><?php echo $employee['id']; ?></td>
        <td><?php echo $employee['name']; ?></td>
        <td><?php echo $employee['email']; ?></td>
        <td><?php echo $employee['role']; ?></td>
        <td>
          <form method="post" action="delete_employé.php" onsubmit="return confirmDelete();">
            <input type="hidden" name="email" value="<?php echo $employee['email']; ?>">
            <button type="submit">Supprimer</button>
          </form>
          <a href="edit_employé.php?id=<?php echo $employee['id']; ?>">Modifier</a>
        </td>
      </tr>
    <?php endforeach; ?>
  </table>
</div>

<script>
  function confirmDelete() {
    return confirm("Êtes-vous sûr de vouloir supprimer cet employé ?");
  }
</script>

<?php require '../php/footer.php' ?>
