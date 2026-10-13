<?php 

require_once 'vaca.php';
require_once 'Cachorro.php';

$animal1 = new Vaca('Bovina','Vaca Melone');
$animal2 = new Cachorro('Canina','Cachorro Chuliahua');

$animal1->emitir_som();
echo "<br/>";
$animal2->emitir_som();

?>