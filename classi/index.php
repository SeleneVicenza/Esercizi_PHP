<?php
/* declare(strict_types=1);*/
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


#require_once __DIR__ . '/lib/Corso.php';
require  __DIR__ . '/lib/FrontEnd.php';
require  __DIR__ . '/lib/BackEnd.php';
require  __DIR__ . '/lib/Trait.php';

$corsoPHP = new Corso('PHP', 'Gianluca', 'Backend', 10.5);
$corsoAngular = new FrontEnd('Angular', 'Gianluca', 'Frontend', 15.5, true, "configurazione Angular");
$corsoSpring = new BackEnd('Spring', 'Gianluca', 27, true);

echo $corsoPHP->riepilogo();
echo "<hr>";
echo $corsoAngular->riepilogo();
echo "<hr>";
echo $corsoSpring->riepilogo();

$provaT = new ProvaTrait();

$provaT->provaTrait1();
$provaT->provaTrait2();
?>

