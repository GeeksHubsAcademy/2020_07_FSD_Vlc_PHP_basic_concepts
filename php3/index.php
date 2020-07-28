<?php

function concatenar(&$argumento){
    $argumento .= " hoy toca esforzarme.";
    
}

function predeterminada($pi = 3.14){
    $res = $pi * 2;
    return $res;
}

$cadena = "Estoy estudiando PHP y ....";


concatenar($cadena);

echo ($cadena);

$mostrar = predeterminada();
$mostrar = predeterminada(50);

/*En el caso de no pasar ningún argumento en la llamada, 
tendrá como valor el predeterminado, en caso de si pasárselo,
machacará al predeterminado.*/

echo($mostrar);


function declaracion_tipo(bool $verdad){
    $verdad = false;
    return $verdad;
}



?>


