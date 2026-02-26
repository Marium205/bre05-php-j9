<?php

require "Character.php";

$character = new Character("Ragnar");

$weapon = new Weapon("Sword", 10);
$character->setWeapon($weapon);

echo "Nom du personnage : " . $character->getName() . "<br>";
echo "Arme : " . $character->getWeapon()->getName() . "<br>";
echo "Dégâts : " . $character->getWeapon()->getDamages() . "<br>";

echo $character->fight();