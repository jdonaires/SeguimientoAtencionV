<?php
class paciente
{
	private $idPaciente;
	private $nrohistoria;
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
