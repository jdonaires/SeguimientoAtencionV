<?php
class Persona
{
	private $idpersona;
	private $nombres;
	private $apellidos;
	private $dni;
	private $direccion;
	private $fecnac;
	private $genero;
	private $email;
	private $telefono;
	private $estado;
	private $cargo;

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
