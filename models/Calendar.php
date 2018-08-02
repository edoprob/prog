<?php
class Calendar{
	public function getCalendar(){

		$data = date("Y-m");
		$dia1 = date('w', strtotime($data));
		$dias_total = date('t', strtotime($data));
		$linhas = ceil($dia1 + ($dias_total/7));
		$dia1 = -$dia1;
		$dia_inicial = date('Y-m-d', strtotime($dia1.' days', strtotime($data)));
		$dia_final = date('Y-m-d', strtotime(($dia1+ ($linhas*7) -1).' days', strtotime($data)));

		$dias = array($data, $dia1, $dias_total, $linhas, $dia_inicial, $dia_final);
		
	}
}
?>