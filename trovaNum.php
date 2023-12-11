<?php

$voti = [28, 30, 29, 26, 18];

function calcolaMedia ($variable) {

    $somma = 0;
    foreach ($variable as $key => $value) {
        $somma += $value;
    }
    return $somma / count($variable);
}


echo "voti ottenuti: " . implode(', ', $voti);
echo "<br>";
echo "<br>";
echo "<br>";


echo "-  MEDIA voti: " . "<strong>" . calcolaMedia($voti) . "</strong>";
echo "<br>";

echo "- Voto più ALTO: " . "<strong>" . max($voti) . "</strong>";
echo "<br>";

echo "- Voto più BASSO: " . "<strong>" . min($voti) . "</strong>";
echo "<br>";

?>