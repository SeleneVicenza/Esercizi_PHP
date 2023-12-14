<?php
require __DIR__ . './Corso.php';

class BackEnd extends Corso {
    private $categ = "Backend";
    private bool $framework;

    public function __construct($titolo, $autore, $prezzo, $framework) {
        parent::__construct($titolo, $autore, $this->categ, $prezzo);
        $this->framework = $framework;
    }

    public function riepilogo() {
        return parent::riepilogo()
        . (($this->framework === true) ? "E' un framework <br>" : "non è un framework <br>");
    }
}

?>