<?php
#GENERAZIONE PASSWORD SICURA

$caratteri = [
    'abcdefghilmnopqrstuvz',
    'ABCDEFGHILMNOPQRSTUVZ',
    '1234567890',
    '&%?!'
];

$password = '';

for ($i=0; $i <16 ; $i++) {
    $sel = rand(0, 3);
    $password .= $caratteri[$sel][rand(0, strlen($caratteri[$sel])- 1)];
}


echo $password

?>