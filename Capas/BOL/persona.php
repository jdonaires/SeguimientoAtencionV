<?php
class Persona
{
	private $idpersonas;
	private $nombre;
	private $apellido;
	private $Dni;
	private $Direccion;
	private $Fecnac;
	private $Genero;
	private $Email;
	private $Telefono;
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
