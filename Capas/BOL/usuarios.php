<?php
class Usuarios
{
	private $IdUsuario;
	private $Usuario;
	private $Pass;

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
