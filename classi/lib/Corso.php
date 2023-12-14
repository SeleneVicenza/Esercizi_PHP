<?php
declare(strict_types=1);

class Corso
{


    private string $titolo = '';
    private string $autore = '';
    private string $categoria = '';
    private float $prezzo = 0;

    public function __construct(string $titolo, string $autore, string $categoria, float $prezzo) {
        $this->titolo = $titolo;
        $this->autore = $autore;
        $this->categoria = $categoria;
        $this->prezzo = $prezzo;
    }


    public function getTitolo() {
        return $this->titolo;
    }

    public function getAutore() {
        return $this->autore;
    }

    public function getCategoria() {
        return $this->categoria;
    }

    public function getPrezzo() {
        return $this->prezzo;
    }



    public function setTitolo($titolo) {
        $this->titolo = $titolo;
    }

    public function setAutore($autore) {
        $this->autore = $autore;
    }

    public function setCategoria($categoria) {
        $this->categoria = $categoria;
    }

    public function setPrezzo($prezzo) {
        $this->prezzo = $prezzo;
    }

    public function riepilogo() {
        return "Titolo: " . $this->titolo . "<br>"
        . "Autore: " . $this->autore . "<br>"
        . "Categoria: " . $this->categoria . "<br>"
        . "Prezzo: " . $this->prezzo . "<br>";
    }


}




?>