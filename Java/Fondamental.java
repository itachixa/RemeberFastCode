public class fondamental{
    public static void main(String[] args) {
        // Déclaration de variables
        int a = 20;
        String b = "maman";

        // Affichage des valeurs
        System.out.println("La valeur de a est : " + a);
        System.out.println("La valeur de b est : " + b);

        // Exemples de conditions
        if (a > 10) {
            System.out.println("a est supérieur à 10");
        } else {
            System.out.println("a est inférieur ou égal à 10");
        }

        // Boucle for
        for (int i = 0; i < 5; i++) {
            System.out.println("i vaut : " + i);
        }

        // Appel à la fonction afficherMessage
        afficherMessage("Ceci est un message affiché via une fonction.");
    }

    // Fonction pour afficher un message
    public static void afficherMessage(String message) {
        System.out.println(message);
    }
}
