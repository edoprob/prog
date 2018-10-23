<?php

class projectsController extends controller {

//index
	public function index() {
		$dados = array();
		$this->loadTemplate('projects', $dados);
	}

//project 01 - Calendar snes
	public function calendar() {
		$c = new Calendar();

		$dados = array(
			'linhas' => $c->getDiaLinhas(),
			'dia_inicio' => $c->getDiaInicio(),
			'mes_atual' => $c->getMesAtual(),
			'mes_nome' => $c->getMesNome(),
			'roms' => $c->getRoms(),
			'qt' => $c->getQt(),
			'report' => $c->getReport(),
			'profit' => $c->getProfit(),
			'profit_month' => $c->getProfitMonth(),
			'profit_now' => $c->getProfitNow()
		);

		
		$this->loadTemplate('projects/calendar', $dados);
	}
	public function calendarData(){	
		$c = new Calendar();
		$c->verifyPOST();

		$dados = array();
		$this->loadTemplate('projects/calendarData', $dados);

	}

//project 02
	
}

?>