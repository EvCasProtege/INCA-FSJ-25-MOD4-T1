<?php
function esPrimo($numero) {
    // lo numero raiz son los numeros que se pueden dividir entre si
    if ($numero <= 1) {
        return false;
    }
    
    // Verificamos si el número es divisible por algún número entre 2 y la raíz cuadrada del número
    for ($i = 2; $i <= sqrt($numero); $i++) {
        if ($numero % $i == 0) {
            return false;
        }
    }
    
    return true;
}

$numero = 29;
if (esPrimo($numero)) {
    echo "$numero es un número primo.";
} else {
    echo "$numero no es un número primo.";
}
?>
