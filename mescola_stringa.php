<?php


$str = "Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et";
echo $str . "<br><br>";


$parole = explode(" ", $str);
shuffle($parole);

$ris = implode(" ", $parole);
echo "mischiata: <br>";
echo $ris . "<br>";
?>


