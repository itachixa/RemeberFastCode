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

// boucle while
$i=0;
while( $i < 5 ){
    echo "i vaut : ". $i. "<br>";
    $i++;
}

// Fonction simple
function afficherMessage($message) {
    echo $message . "<br>";
}

afficherMessage("Ceci est un message affiché via une fonction.");

// fonction avec portées des variables
function compteur(){
    static $i = 0;
    $i++;
    echo "compteur : $i<br>";
}

compteur();
compteur();

