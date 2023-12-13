<?php

$iscritti = [
    ['id' => 10, 'nome' => "Gianluca", 'lavoro' => "Programmatore"],
    ['id' => 11, 'nome' => "Antonio", 'lavoro' => "Insegnante"],
    ['id' => 12, 'nome' => "Michela", 'lavoro' => "Astronauta"],
    ['id' => 13, 'nome' => "Giusy", 'lavoro' => "Avvocato"],
    ['id' => 14, 'nome' => "Manuel", 'lavoro' => "Studente"],
];

$nomiIscritti = array_column($iscritti, 'nome');

echo implode(" ", $nomiIscritti);


?>