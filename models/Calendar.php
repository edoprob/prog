<?php
class Calendar{

	private $linhas;
	private $dia_inicial;

	public function __construct(){

		$data = date("d / m / Y");
		$dia1 = date('w', strtotime($data));
		$dias_total = date('t', strtotime($data));
		$linhas = ceil(($dia1 + $dias_total)/7);
		$dia1 = -$dia1;
		$dia_inicial = date('Y-m-d', strtotime($dia1.' days', strtotime($data)));
		$dia_final = date('Y-m-d', strtotime(($dia1+ ($linhas*7) -1).' days', strtotime($data)));

		$this->linhas = $linhas;
		$this->dia_inicial = $dia_inicial;

	}

	public function getDiaInicio() {
		return $this->dia_inicial;
	}
	public function getDiaLinhas() {
		return $this->linhas;
	}
}
?>