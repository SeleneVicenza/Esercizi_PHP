<?php

$str = "abcdefgh";

$str1 = '';

for ($i=0; $i < strlen($str) ; $i++) {
    $str1 .= ($i % 2 === 1) ? "$str[$i] " : $str[$i];
}

#FUNZIONE PREDEFINITA chunk_spit
# $strCS = chunk_split($str, 2, ' ');


echo "$str => " . rtrim($str1) . ".<br>";

echo "$str => " . rtrim(chunk_split($str, 2, ' ')) . ".<br>";


?>