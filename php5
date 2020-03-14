<?php

$weapons = ['fists', 'whip', 'gun'];
$opponentWeapon = $weapons[rand(0,2)]; // Cela permet de choisir une arme de manière aléatoire.

$indyWeapon = 'whip';

switch ($opponentWeapon) {
    case 'fists':
        $indyWeapon = 'gun';
        break;
    case "whip":
        $indyWeapon = 'fists';
        break;
}

echo($opponentWeapon).chr(13);
echo($indyWeapon);
