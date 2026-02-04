<?php

$nom = $_POST['nom'] ?? '';
$prenom = $_POST['prenom'] ?? '';
$age = $_POST['age'] ?? '';
$email = $_POST['email'] ?? '';
$filiere = $_POST['filiere'] ?? '';

if (isset($_POST['sexe'])) {
    $sexe = implode(", ", $_POST['sexe']);
} else {
    $sexe = "Non précisé";
}

echo "===== Informations d'inscription =====\n";
echo "Nom : $nom\n";
echo "Prénom : $prenom\n";
echo "Âge : $age\n";
echo "Email : $email\n";
echo "Filière : $filiere\n";
echo "Sexe : $sexe\n";

?>
