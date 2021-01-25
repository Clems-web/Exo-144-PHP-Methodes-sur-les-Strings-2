<?php
// exo1
$micka = "Aujourd'hui il fait -1000 degrés <br>";

echo addslashes($micka);

$machaine = "ceci est un text lamba qui me passe par la tête <br>";

echo strtoupper($machaine);
echo ucfirst($machaine);
echo ucwords($machaine);

// exo 2
$machaine2 = "TEXTE 2 <br>";

echo strtolower($machaine2);
echo lcfirst($machaine2);

// exo 3

$chaine3 = "il me faut au moins 25 mots dans cette chaîne de caractères, alors j'écris ce qu'il me passe par la tête 
            encore une fois";

echo str_word_count($chaine3) . "<br>";

// exo 4

$blabla = "encore une chaîne de caractere";

$tableau = explode(" ", $blabla);

foreach ($tableau as $mot) {
    echo "$mot <br>";
}

// exo 6

$chaineagain = "le texte de votre choix";

echo strrev($chaineagain) . "<br>";
echo str_shuffle($chaineagain)."<br>";

//exo 7

$texte = "<strong>Hello, </strong> nous apprenons <span style='color: blue;'>PHP</span>";

echo $texte;
echo strip_tags($texte) . "<br>";

//exo 8

$texte2 = "blablabla";
if (strlen("$texte2") < 500) {
    echo "| $texte2 . <br>";
}

// exo 9

$jesaisplus = "je sais plus";
$myArray = str_split($jesaisplus);
foreach ($myArray as $letters) {
    echo $letters . "<br>";
}

// exo 10

$chaine4 = "Coucou toi !";
$chaine4 = str_replace("toi", "World", $chaine4);
echo $chaine4 . "<br>";

// exo 11

$test = "chaine de caractere test";

if (strpos($test, "test")) {
    echo $test;
}

// exo 12

function verify($string, $firstWord) {
    if (strpos($string, $firstWord) === 0) {
        echo "$string <br>";
    }
}

verify($test, "chaine");

// exo 13

function verifyEnd($string, $lastWord) {
    $position = strrpos($string, $lastWord);
    if ($position !== false) {
        echo "$string exo 13 <br>";
    }
}

verifyEnd($test, "test");