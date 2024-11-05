<?php
function esPalindromo($cadena) {
    // omologar la cadena para que no haya espacios y sea todo en minúsculas
    $cadena = strtolower(str_replace(' ', '', $cadena));
    
    if ($cadena == strrev($cadena)) {
        return true;
    } else {
        return false;
    }
}

// Ejemplo de uso
$cadena = "Anita lava la tina";
if (esPalindromo($cadena)) {
    echo "\"$cadena\" es un palíndromo.";
} else {
    echo "\"$cadena\" no es un palíndromo.";
}
?>
