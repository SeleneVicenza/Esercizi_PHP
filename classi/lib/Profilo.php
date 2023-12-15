<?php
require __DIR__ . './ClasseAstratta.php';


class Profilo extends ClasseAstratta {
    public function curriculum(string $lezione) : string {
        return "Metodo " . __METHOD__ . " di " . __CLASS__ . ". <br>";
    }
}


?>