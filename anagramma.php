<?php


function anagramma($s1, $s2) {
    if(strlen($s1) !== strlen($s2)) {
        return false;
    }
    for ($i=0; $i < strlen($s1) ; $i++) {
        if(substr_count($s1, $s1[i]) !== substr_count($s2, $s1[i])) {
            return false;
        }
    }
    return true;
}




if(anagramma('casa', 'asac') === true) {
    echo "le due parole sono anagrammi";
}else {
    echo "le due parole NON sono anagrammi";
}
echo "<br> -------------------------------------------- <br>";









?>