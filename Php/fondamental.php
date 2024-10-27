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

// POO avec php
// les classes objets methodes et proprietes
class Voiture {
    
    public $marque;
    public $couleur;

    public function __construct($marque, $couleur) {
        $this->marque = $marque;
        $this->couleur = $couleur;
    }

    public function demarrer(){
        return "la ".$this->marque."démarre";
    }
}

$mavoiture = new Voiture("Toyota","gris");
echo $mavoiture->demarrer();


// gestions de fichiers lecture et ecriture de fichier

// exemple d'ecriture de fichier

$fichier = fopen("text.txt", "w");
fwrite($fichier, "J'ai ecris sur une ligne dans le fichier");
fclose($fichier);

// exemple de lecture de fichier

$fichier = fopen("text.txt", "r");
echo fread($fichier, filesize("text.txt"));
fclose($fichier);


// gestions des formulaire par la methodes POST et GET

// exemple de formulaire avec POST
// ce code suivant mis en commentaire devrait etre ecrite sur une page html 

// <form method="post" action="formulaire.php">
//     <input type = "text" name = "nom" placeholder ="entrer votre nom">
//     <input type = "submit" value = "Envoyer">
// </form>

if($_SERVER["REQUEST_METHOD"]=="POST"){
    $nom = htmlspecialchars($_POST["nom"]);
    echo "Bonjour $nom";
}

// les sessions et les cookies

// demarragede sessions
session_start();
$_SESSION["user"]="ZEXA";

echo $_SESSION["user"];

// création de cookie

setcookie("user", "ZEXA", time() + (86400 * 30), "/"); // 86400 secondes = 1 jour

if(isset($_COOKIE["utilisateur"])){
    echo "Bienvenue ".$_COOKIE["utilisateur"]."!";
}

//  bases de donnees avec SQL
$host="localhost";
$user="root";
$pass="";
$db = "le_nom_de_ta_base_de_donne";

$conn = new mysqli($host, $user, $pass, $db);
// PDO 

try {
    $bdd = new PDO('mysql:host=localhost;dbname=le_nom_de_ta_base_de_donne;charset=utf8', 'root', '');
} catch (PDOException $e) {
    die('Erreur : '. $e->getMessage());
}

?>
