<?php
function generarFibonacci($n) {
    // Inicializamos los primeros dos términos de la serie esto sirve para iniciar el ciclo fibonacci
    $fibonacci = [0, 1];
    
    // genera los terminos que faltan de la serie
    for ($i = 2; $i < $n; $i++) {
        $fibonacci[] = $fibonacci[$i - 1] + $fibonacci[$i - 2];
    }
    
    return $fibonacci;
}


$n = 10;
print_r(generarFibonacci($n));
?>
