﻿using System;

class Fondamental
{
    static void Main(string[] args)
    {
        // Déclaration de variables en C#
        int a = 20;
        string b = "maman";

        // Affichage dans la console
        Console.WriteLine("La valeur de a est : " + a);
        Console.WriteLine("La valeur de b est : " + b);

        // Exemples de conditions
        if (a > 10)
        {
            Console.WriteLine("a est supérieur à 10");
        }
        else
        {
            Console.WriteLine("a est inférieur ou égal à 10");
        }

        // Boucle for
        for (int i = 0; i < 5; i++)
        {
            Console.WriteLine("i vaut : " + i);
        }

        // Fonction simple
        AfficherMessage("Ceci est un message affiché via une fonction.");
    }

    // Méthode pour afficher un message
    static void AfficherMessage(string message)
    {
        Console.WriteLine(message);
    }
}
