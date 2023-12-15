<?php

trait Trait1 {
    public function provaTrait1 () {
        echo "Metodo " . __METHOD__ . " eseguito. <br>";
    }
}

trait Trait2 {
    public function provaTrait2 () {
        echo "Metodo " . __METHOD__ . " eseguito. <br>";
    }
}

class ProvaTrait {
    use Trait1;
    use Trait2;
}

?>