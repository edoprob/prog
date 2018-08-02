<?php
class loginController extends controller{

	public function index() {
		$l = new Login();
		$l->verifyLoggedIn();
		$l->verifyLogin();

		$dados = array();

		$this->loadTemplate("login", $dados);
	}

	public function sair(){
		$l = new Login();
		$l->logoff();
	}
}
?>