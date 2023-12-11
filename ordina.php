<?php

echo "<strong>Partecipanti:</strong> <br>";


$risultati = [
    "Antonio" => 12.25,
    "Simone" => 12.78,
    "Luca" => 11.98,
    "Carlo" => 13.11
];


#krsort per ordine inverso
ksort($risultati);

foreach ($risultati as $key => $value) {
    echo $key . "<br>";
}

echo "<br> <strong>Risultati: </strong> <br>";
#arsort per ordine inverso
asort($risultati);


foreach ($risultati as $key => $value) {
    echo $key . "-> " . $value . "<br>";
}


?>