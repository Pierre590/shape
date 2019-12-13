<?php
require "class/Shape.php";
require "class/Carre.php";
require "class/Cercle.php";
require "class/Triangle.php";

$square1 = new Carre(10, "carre 1");
$square2 = new Carre(24, "carre 2");


$square1->displayPerimeter('mm');
echo '</br>';
$square1->displayPerimeter('m');
echo '</br>';


$square2->displayPerimeter();
//echo "le carré à un périmetre de " .$square2->perimeter(). " m";//
echo '</br>';
$square2->displayPerimeter('mm');
echo '</br>';

$square1->displayarea();
echo '</br>';

echo "la surface du carré est de " .$square1->area(). " m²";
echo '</br>';

echo "la surface du carré est de " .$square2->area(). " m²";
echo '</br>';


$round = new Cercle(8, "cercle1");

echo "le perimetre du cercle est de  " .$round->perimeter(). " m";
echo '</br>';

echo "la surface du cercle est de  " .$round->area(). " m²";
echo '</br>';


$tri = new Triangle(9,12,15, "tri1");

echo "le perimetre du triangle est de  " .$tri->perimeter(). " m";
echo '</br>';

echo "la surface du triangle est de  " .$tri->area(). " m²";
echo '</br>';




 ?>
