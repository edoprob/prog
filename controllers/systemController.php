<?php
class systemController extends controller{
	
	public function index(){
		$l = new Login();
		$l->verifyLoggedOut();
		$c = new Calendar();

		$dados = array(
			'quantidade' => '4',
			'nome' => 'seila'
		);

		$this->loadTemplate("system", $dados);
	}
}
?>