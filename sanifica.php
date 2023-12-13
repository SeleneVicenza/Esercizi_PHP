<?php
#numero di telefono
$tel = "+39 abc 333 444 5566";
$telClean = filter_var($tel, FILTER_SANITIZE_NUMBER_INT);
echo $telClean;
echo "<hr>";

#stringa
$str = "<script>alert('XSS');</script>";
$strClean = filter_var($str, FILTER_SANITIZE_STRING);
echo $strClean;
// ------- da php 8.1 -> FILTER_SANITIZE_FULL_SPLECIAL_CHARS
echo "<br>" . htmlspecialchars($str);
echo "<hr>";
#query
$query = "insert into t1 (c1) values ('valore1');";
echo addslashes($query);
$queryClean = filter_var($query, FILTER_SANITIZE_ADD_SLASHES);
echo "<br>" . $queryClean;

?>

