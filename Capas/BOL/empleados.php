<?php
class empleado
{
	private $idEmpleado;
	private $Turno;
	private $cargo;
	private $idpersona;

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
