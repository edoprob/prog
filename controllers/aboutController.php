<?php

class aboutController extends controller{

	public function index() {
		$dados = array();

		$this->loadTemplate('about', $dados);
	}
}


?>