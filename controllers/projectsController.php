<?php

class projectsController extends controller {

	public function index() {

		$dados = array();

		$this->loadTemplate('projects', $dados);
	}

	public function calendar() {
		$c = new Calendar();

		$dados = array(
			'linhas' => $c->getDiaLinhas(),
			'dia_inicio' => $c->getDiaInicio()
		);

		$this->loadTemplate('projects/calendar', $dados);
	}
}

?>