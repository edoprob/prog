<?php
class Calendar{

	private $linhas;
	private $dia_inicial;
	private $dia_final;

	public function getCalendar(){

		$data = date("d / m / Y");
		$dia1 = date('w', strtotime($data));
		$dias_total = date('t', strtotime($data));
		$linhas = ceil(($dia1 + $dias_total)/7);
		$dia1 = -$dia1;
		$dia_inicial = date('Y-m-d', strtotime($dia1.' days', strtotime($data)));
		$dia_final = date('Y-m-d', strtotime(($dia1+ ($linhas*7) -1).' days', strtotime($data)));

		$this->linhas = $linhas;
		$this->dia_inicial = $dia_inicial;
		$this->dia_final = $dia_final;

	}

	public function getDiaInicio() {
		$this->getCalendar();
		return $this->dia_inicial;
	}
	public function getDiaFim() {
		$this->getCalendar();
		return $this->dia_final;
	}
	public function getDiaLinhas() {
		$this->getCalendar();
		return $this->linhas;
	}
}
?>