<?php
class Seguimientos
{
	private $id;
	private $AreaEntrefa;
	private $AreaRecepcion;

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
