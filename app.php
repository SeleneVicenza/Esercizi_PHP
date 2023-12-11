<?php

$clienti = [
    [
        'nome' => 'Marco',
        'professione' => 'Programmatore',
        'telefono' => 123
    ],
    [
        'nome' => 'Michela',
        'professione' => 'Medico',
        'telefono' => 456
    ],
    [
        'nome' => 'Elena',
        'professione' => 'Idraulico',
        'telefono' => 789
    ],
    [
        'nome' => 'Marco',
        'professione' => 'Cuoco',
        'telefono' => 987
    ],
];

if(!isset($argv[1])) {
    echo "Indica il nome da cercare \n";
    exit;
}

$res = '';

foreach ($clienti as $c) {
    if (in_array($argv[1], $c)) {
        $res .= "Cliente: \n";
        foreach ($c as $key => $value) {
            $res .= $key . " => " . $value . " " ;
        }
        $res .= "\n";
    }
}



if ($res === '') {
    echo "Cliente non trovato";
} else {
    echo $res;
}



?>