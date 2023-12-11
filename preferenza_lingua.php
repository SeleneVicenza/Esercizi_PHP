<?php

$lingueSito = ['it', 'en'];

$preferenza = $_SERVER['HTTP_ACCEPT_LANGUAGE'];

$linguePreferite = explode(',', $preferenza);

foreach ($linguePreferite as $pref) {
    $pref = substr($pref, 0, 2);
    if(in_array($pref, $lingueSito)) {
        header("location: /corsi/php/esercizi/$pref");
        exit;
    }
}

?>