<?php
// Vérifier si l'ID de l'employé à modifier est présent dans l'URL
if (isset($_GET['id'])) {
  $employee_id = $_GET['id'];

  require '../php/header.php';

  // Connexion à la base de données
  $conn = mysqli_connect('localhost', 'root', 'root', 'garageparrot');
  if (!$conn) {
    die('Erreur de connexion à la base de données: ' . mysqli_connect_error());
  }

  // Récupérer les informations de l'employé à partir de son ID
  $query = "SELECT * FROM users WHERE id = '$employee_id'";
  $result = mysqli_query($conn, $query);
  $employee = mysqli_fetch_assoc($result);

  // Vérifier si le formulaire d'édition a été soumis
  
 
if ($_SERVER['REQUEST_METHOD'] === 'POST'&& isset($_POST['name'], $_POST['email'], $_POST['role'])) {
    // Récupérer les nouvelles données du formulaire
    $name = $_POST['name'];
    $email = $_POST['email'];
    $role = $_POST['role'];

    // Mettre à jour les informations de l'employé dans la base de données
    $update_query = "UPDATE users SET name = '$name', email = '$email', role = '$role' WHERE id = '$employee_id'";
    if (mysqli_query($conn, $update_query)) {
      echo "Informations de l'employé mises à jour avec succès!";
      // Rediriger vers le tableau de bord de l'administrateur après la modification
      header('Location: admin.php');
      exit;
    } else {
      echo "Erreur lors de la mise à jour des informations de l'employé: " . mysqli_error($conn);
    }
  }

  // Fermer la connexion à la base de données
  mysqli_close($conn);
} else {
  // Rediriger vers le tableau de bord de l'administrateur si l'ID n'est pas présent dans l'URL
  header('Location: admin.php');
  exit;
}
?>

<h2>Modifier les informations de l'employé</h2>
<div class="form-container">
  <form method="POST" action="edit_employé.php?id=<?php echo $employee_id; ?>">
    <label for="name">Nom:</label><br>
    <input type="text" name="name" id="name" value="<?php echo $employee['name']; ?>" required><br>
    <label for="email">Email:</label><br>
    <input type="email" name="email" id="email" value="<?php echo $employee['email']; ?>" required><br>
    <label for="role">Rôle:</label><br>
    <select name="role" id="role">
      <option value="secretaire"<?php if ($employee['role'] === 'secretaire') echo 'selected'; ?>>Secrétaire</option>
      <option value="mecanicien"<?php if ($employee['role'] === 'mecanicien') echo 'selected'; ?>>Mécanicien</option>
      <option value="peintre"<?php if ($employee['role'] === 'peintre') echo 'selected'; ?>>Peintre</option>
      <option value="carrossier"<?php if ($employee['role'] === 'carrossier') echo 'selected'; ?>>Carrossier</option>
      <option value="commercial"<?php if ($employee['role'] === 'commercial') echo 'selected'; ?>>Agent Commercial</option>
    </select><br>
    <input type="submit" value="Enregistrer les modifications">
  </form>
</div>