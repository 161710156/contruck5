<?php

require_once 'konstrak.php';

$mobil = new mobil('Toyota', '4 Orang', 'matic');
echo "Merk mobil = ".$mobil->get_a().'<br>';
echo "Kapasitas = ".$mobil->get_b().'<br>';
echo "Type mobil = ".$mobil->get_c().'<br>';
?>