<?php

$weapons = ['fists', 'whip', 'gun'];
$opponentWeapon = $weapons[rand(0,2)]; // Cela permet de choisir une arme de manière aléatoire.

// TODO
$indyWeapon = 'gun';

echo $opponentWeapon;
echo "<hr/>";


     if ($opponentWeapon === "fists") {
    $indyWeapon = "gun";
} elseif ($opponentWeapon === "whip") {
    $indyWeapon = "fists";
} elseif ($opponentWeapon === "gun") {
    $indyWeapon = "whip";
}

    



?>
