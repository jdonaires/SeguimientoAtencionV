<?php
class Doctores
{
	private $IdDoctor;
	private $Codigo;
	private $Especialidad;

	public function __GET($x)
	{
		return $this->$x;
	}
	public function __SET($x, $y)
	{
		return $this->$x = $y;
	}
}
?>
