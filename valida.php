<?php

$num = "5";

$test = filter_var($num, FILTER_VALIDATE_INT, [
    'options' => ['min_range' => 2, 'max_range' => 7]
]);

echo $test;
echo "<hr>";
$email = "sel@test.it";
$testMail = filter_var($email, FILTER_VALIDATE_EMAIL);
echo $testMail;

?>