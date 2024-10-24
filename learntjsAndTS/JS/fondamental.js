// Déclaration de variables avec let et var
let a = 20; // let a une portée de bloc, donc accessible uniquement dans le bloc où il est déclaré
var b = "maman"; // var a une portée de fonction, donc il est plus global que let

// Affichage des valeurs avec console.log()
console.log("La valeur de a est : " + a); // Affiche la valeur dans la console du navigateur ou du terminal
console.log("La valeur de b est : " + b);

// Utilisation de alert() pour afficher une alerte dans le navigateur
alert("La valeur de a est : " + a); // Affiche une alerte dans le navigateur avec la valeur de a
alert("La valeur de b est : " + b);

// Note : echo() est une fonction PHP, pas JavaScript. Dans JavaScript, on utilise console.log() ou alert() pour afficher des données.

// Utilisation de const pour déclarer une constante
const pi = 3.14; // Constante, sa valeur ne peut pas être modifiée
console.log("La valeur de pi est : " + pi);

// Quelques bonnes pratiques
// - Toujours utiliser 'let' ou 'const' plutôt que 'var' pour éviter des erreurs liées à la portée
// - Favorisez const lorsque la valeur ne doit pas changer

// Exemples de conditions
if (a > 10) {
    console.log("a est supérieur à 10");
} else {
    console.log("a est inférieur ou égal à 10");
}

// Exemples de boucles
for (let i = 0; i < 5; i++) {
    console.log("i vaut : " + i);
}

// Fonction simple
function afficherMessage(message) {
    console.log(message);
}

afficherMessage("Ceci est un message affiché via une fonction.");
