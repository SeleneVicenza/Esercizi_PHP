 <?php
require_once __DIR__ . './Corso.php';

class BackEnd extends Corso {
    private $categ = 'BackEnd';
    private bool $framework;
    private $config;


    public function __construct($titolo, $autore, $prezzo, $framework, $config = "Nessuna") {
        parent::__construct($titolo, $autore, $this->categ, $prezzo);
        $this->framework = $framework;
        $this->config = $config;
    }

    public function riepilogo() {
        return parent::riepilogo()
        . (($this->framework === true) ? "E' un framework <br>" : "non è un framework <br>")
        . "Configurazioni: " . $this->config . "<br>";
    }
}

?>