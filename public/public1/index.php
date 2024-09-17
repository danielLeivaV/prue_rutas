<?php 
include $_SERVER['DOCUMENT_ROOT'] . '/prue_rutas/variable/varA/variable_a.php';


function suma($a,$c): int {
return $a +$c;

};
echo "suma es ", suma($a,$c);
?>