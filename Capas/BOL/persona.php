<?php
class Personas
{
	private $IdPersonas;
	private $Nombres;
	private $Apellidos;
	private $Dni;
	private $Direccion;
	private $FechaNac;
	private $Genero;
	private $Email;
	private $Telefono;
	private $EstadoCivil;
	private $Estado;
	private $Cargo;

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
