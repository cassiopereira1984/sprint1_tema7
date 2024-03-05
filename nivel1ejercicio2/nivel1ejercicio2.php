<?php
/*- Exercici 2
Practiquem una mica de TDD. Recorda l’exercici 5 del nivell de PHP Bàsics i pensa tests que podries realitzar 
per provar el seu correcte funcionament. Programa’ls i després ves realitzant el programa a testejar pas a pas
segons valides els tests prèviament creats.

EJERCICIO 5 Escriure una funció per verificar el grau d'un/a estudiant d'acord amb la nota.
Condicions:
Si la nota és 60% o més, el grau hauria de ser Primera Divisió.
Si la nota està entre 45% i 59%, el grau hauria de ser Segona Divisió.
Si la nota està entre 33% to 44%, el grau hauria de ser Tercera Divisió.
Si la nota és menor a 33%, l'estudiant reprovarà.*/
Class Nota {

    function nota($nota) {
        if ($nota >= 60) {
            $resp = "Primera Divisió";
        } else if ($nota >= 45 && $nota <= 59) {
            $resp = "Segona Divisió";
        } else if ($nota >= 33 && $nota <= 44) {
            $resp = "   Tercera Divisió";
        } else if ($nota <= 32) {
            $resp = "Reprovat";
        }
        echo $resp;
    }
}
?>