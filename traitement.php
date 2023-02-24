<?php
// Connexion à la base de données
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bserved";

$conn = new mysqli($servername, $username, $password, $dbname);

// Vérifier la connexion
if ($conn->connect_error) {
  die("La connexion a échoué : " . $conn->connect_error);
}

// Récupérer les données du formulaire
$nom = $_POST["nom"];
$avis = $_POST["avis"];
$note = $_POST["note"];
$affiche = $_POST["affiche"];

// Préparer et exécuter la requête d'insertion avec une requête préparée
$stmt = $conn->prepare("INSERT INTO avis (nom, commentaire, etoiles, affiche) VALUES (?, ?, ?, ?)");
$stmt->bind_param("ssis", $nom, $avis, $note, $affiche);
if ($stmt->execute()) {
  echo "Avis ajouté avec succès.";
} else {
  echo "Erreur lors de l'ajout de l'avis : " . $conn->error;
}

// Fermer la connexion et la requête
$stmt->close();
$conn->close();

// Rediriger vers index.php
wp_redirect(home_url('/index.php'));
exit;
?>
