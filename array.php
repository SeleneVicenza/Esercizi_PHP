<?php
# Rimuovere un elemento in base al valore

$test = ['php', 'html', 'java', 'c', 'html'];
echo implode(" ", $test) . "<br>";
$key = array_search('html', $test);

if($key === false) {
    echo 'NESSUN ELEMENTO TROVATO';
}else {
    unset($test[$key]);
    echo implode(" ", $test);
}

echo "<hr>";
#trova chiave

$testKey =  [
    'luisa' => 'admin',
    'valerio' => 'user'
];

if(array_key_exists('luisa', $testKey)) {
    echo "ESISTE";
}else {
    echo "NON ESISTE";
}
echo "<hr>";

#Ottenere la chiave dell' elemento corrente

$test3 = [
    'myComp' => '/componenti',
    'versione' => 1.0
];

echo key($test3);
next($test3);
echo "<br>";
echo key($test3);
echo "<hr>";

#mescolare valori array

$testNum = range(1, 10);
shuffle($testNum);
echo implode(" ", $testNum);
echo "<hr>";

# elimina duplicati

$testDuplicati = [3, 2, 4, 5, 2, 3];
$ris = array_unique($testDuplicati);
echo implode(" ", $ris);

?>