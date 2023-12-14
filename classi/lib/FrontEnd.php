<?php
require __DIR__ . './Corso.php';

class FrontEnd extends Corso {
    private bool $framework;

    public function __construct($titolo, $autore, $categoria, $prezzo, $framework) {
        parent::__construct($titolo, $autore, $categoria, $prezzo);
        $this->framework = $framework;
    }

    public function riepilogo() {
        return parent::riepilogo()
        . (($this->framework === true) ? "E' un framework <br>" : "non è un framework <br>");
    }

}

//var_dump(new FrontEnd("css", "io", "", 10, true));
/* $corso = new FrontEnd("Angular", "io", "FE", 10, true);
echo $corso->riepilogo(); */





?>


