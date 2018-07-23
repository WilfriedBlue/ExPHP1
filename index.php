<?php

echo "Je suis un éléphant!";
echo "<br><br>";

//Créer une variable name et l'initialiser avec la valeur de votre choix. Afficher son contenu.

$name = "Wilfried <br> <br>";
echo $name;

//Créer trois variables lastname , firstname et age et les initialiser avec les valeurs de votre choix. Attention age est de type entier. Afficher leur contenu.


$lastname = "Artus <br>";
$firstname =  "Wilfried <br>";
$age = 29;
echo $lastname . $firstname . $age . " ans <br> <br>";

//Créer une variable km. L'initialiser à 1. Afficher son contenu.
//Changer sa valeur par 3. Afficher son contenu.
//Changer sa valeur par 125. Afficher son contenu.

$km = 1;
echo $km . "<br>";
$km = 3;
echo $km . "<br>";
$km = 125;
echo $km . "<br> <br>";

//Créer une variable de type string, une variable de type int, une variable de type float, une variable de type booléan et les initialiser avec une valeur de votre choix.
//Les afficher.

$string = "Babidibou";
$int = 42;
$float = 42.42;
$bool = true;

//Créer une variable de type int. L'initialiser avec rien. Afficher sa valeur.
//Donner une valeur à cette variable et l'afficher.

$int= NULL;
echo $int;
$int= 42;
echo $int . "<br> <br>";

//Créer une variable name et l'initialiser avec la valeur de votre choix.
//Afficher : "Bonjour" + name + ", comment vas tu ?".

$name = "Wilfried";
echo "Bonjour " . $name . ", comment vas tu ? <br> <br>";

//Créer trois variables lastname , firstname et age et les initialiser avec les valeurs de votre choix. Attention age est de type entier.
//Afficher : "Bonjour" + lastname + firstname + ",tu as" + age + "ans".

$lastname = "Artus";
$firstname =  "Wilfried";
$age = 29;
echo "Bonjour " . $lastname . " " . $firstname . ", tu as " . $age . " ans. <br> <br>";

//Créer 3 variables.
//Dans la première mettre le résultat de l'opération 3 + 4.
//Dans la deuxième mettre le résultat de l'opération 5 * 20.
//Dans la troisième mettre le résultat de l'opération 45 / 5.
//Afficher le contenu des variables.

$var1 = 3 + 4;
$var2 = 5 * 20;
$var3 = 45 / 5;

echo $var1 . "<br>" . $var2 . "<br>" . $var3;
