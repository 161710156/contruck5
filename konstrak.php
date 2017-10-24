<?php
class mobil{

public $merk, $kapasitas, $type;

public function __construct($a, $b, $c)
{
	$this->merk = $a;
	$this->kapasitas = $b;
	$this->type = $c;
}

public function get_a()
{
	return $this->merk;
}
public function get_b()
{
	return $this->kapasitas;
}
public function get_c()
{
	return $this->type;
}

}
?>