<?php
require_once __DIR__ . './Corso.php';

class FrontEnd extends Corso {
    private bool $framework;
    private $config;
    public static string $piattaforma = "Piattaforma FronEnd";

    public function __construct($titolo, $autore, $categoria, $prezzo, $framework, $config) {
        parent::__construct($titolo, $autore, $categoria, $prezzo);
        $this->framework = $framework;
        $this->config = $config;
    }

    public function riepilogo() {
        return parent::riepilogo()
        . (($this->framework === true) ? "E' un framework <br>" : "non è un framework <br>")
        . "Configurazioni: " . $this->config . "<br>";
    }



}

//var_dump(new FrontEnd("css", "io", "", 10, true));
/* $corso = new FrontEnd("Angular", "io", "FE", 10, true);
echo $corso->riepilogo(); */





?>


