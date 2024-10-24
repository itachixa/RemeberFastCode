// Déclaration de variables avec int et String en Dart
int a = 20;
String b = "maman";

// Affichage dans la console
void main() {
  // Affichage des valeurs
  print("La valeur de a est : $a");
  print("La valeur de b est : $b");

  // Exemples de conditions
  if (a > 10) {
    print("a est supérieur à 10");
  } else {
    print("a est inférieur ou égal à 10");
  }

  // Boucle for
  for (int i = 0; i < 5; i++) {
    print("i vaut : $i");
  }

  // Appel à la fonction afficherMessage
  afficherMessage("Ceci est un message affiché via une fonction.");
}

// Fonction simple
void afficherMessage(String message) {
  print(message);
}
