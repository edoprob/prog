<?php

class projectsController extends controller {

	public function index() {

		$dados = array();

		$this->loadTemplate('projects', $dados);
	}
}

?>