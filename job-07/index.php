<?php

function my_closest_to_zero($numbers) {
    if (empty($numbers)) {
        return null; // Si la liste est vide, retourne null
    }

    $closest = $numbers[0]; // Initialise avec le premier nombre
    $absClosest = abs($closest); // Valeur absolue du plus proche

    foreach ($numbers as $number) {
        $absNumber = abs($number); // Valeur absolue du nombre en cours

        if ($absNumber < $absClosest) {
            $closest = $number; // Si c'est plus proche, met à jour le plus proche
            $absClosest = $absNumber;
        } elseif ($absNumber === $absClosest) {
            // En cas d'égalité, choisissez le nombre positif
            if ($number > $closest) {
                $closest = $number;
            }
        }
    }

    return $closest;
}

// Exemple d'utilisation :
$numbers = [-5, 2, -1, 7, -3];
$numbers2 = [-19, 40, 18, -12];
$closestNumber = my_closest_to_zero($numbers2);

echo "Le nombre le plus proche de zéro est : " . $closestNumber;
?>
