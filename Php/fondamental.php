<?php
// Déclaration de variables en PHP
$a = 20;
$b = "maman";

// Affichage avec echo
echo "La valeur de a est : " . $a . "<br>";
echo "La valeur de b est : " . $b . "<br>";

// Exemples de conditions
if ($a > 10) {
    echo "a est supérieur à 10<br>";
} else {
    echo "a est inférieur ou égal à 10<br>";
}

// Boucle for
for ($i = 0; $i < 5; $i++) {
    echo "i vaut : " . $i . "<br>";
}

// Fonction simple
function afficherMessage($message) {
    echo $message . "<br>";
}

afficherMessage("Ceci est un message affiché via une fonction.");
?>
