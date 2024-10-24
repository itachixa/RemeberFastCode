// Déclaration de variables avec let et const en TypeScript
let  number = 20; // Spécification du type : number
const  string = "maman"; // Constante string

// Affichage dans la console
console.log("La valeur de a est : " + number);
console.log("La valeur de b est : " + string);

// Alerte dans le navigateur (si exécuté dans un contexte navigateur)
alert("La valeur de a est : " + number);
alert("La valeur de b est : " + string);

// Exemples de conditions
if (number > 10) {
    console.log("a est supérieur à 10");
} else {
    console.log("a est inférieur ou égal à 10");
}

// Boucle for
for (let i = 0; i < 5; i++) {
    console.log("i vaut : " + i);
}

// Fonction simple
function afficherMessageb(message: string): void {
    console.log(message);
}

afficherMessageb("Ceci est un message affiché via une fonction.");
