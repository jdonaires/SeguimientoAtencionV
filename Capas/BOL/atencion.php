<?php
class Atencion
{
	private $IdAtencion;
	private $FechaAtencion;
	private $HistoriaClinica;

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
