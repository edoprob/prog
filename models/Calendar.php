<?php
class Calendar extends model{

// variables of calendar

	private $linhas;
	private $dia_inicial;
	private $mes_atual;
	private $mes_nome;
// variables of roms
	private $roms;
	private $qt;
	private $amountTotal;
	private $amountStock;

//function calendar
	public function __construct(){
		$this->verifyRent();

		$data = date("Y-m");
		$mes_atual = date('m', strtotime($data));
		$dia1 = date('w', strtotime($data));
		$dias_total = date('t', strtotime($data));
		$linhas = ceil(($dia1 + $dias_total)/7);
		$dia1 = -$dia1;
		$dia_inicial = date('Y-m-d', strtotime($dia1.' days', strtotime($data)));
		$dia_final = date('Y-m-d', strtotime(($dia1+ ($linhas*7) -1).' days', strtotime($data)));

			   if ($mes_atual == '01') {$this->mes_nome = 'Janeiro';
		} else if ($mes_atual == '02') {$this->mes_nome = 'Fevereiro';
		} else if ($mes_atual == '03') {$this->mes_nome = 'Março';
		} else if ($mes_atual == '04') {$this->mes_nome = 'Abril';
		} else if ($mes_atual == '05') {$this->mes_nome = 'Maio';
		} else if ($mes_atual == '06') {$this->mes_nome = 'Junho';
		} else if ($mes_atual == '07') {$this->mes_nome = 'Julho';
		} else if ($mes_atual == '08') {$this->mes_nome = 'Agosto';
		} else if ($mes_atual == '09') {$this->mes_nome = 'Setembro';
		} else if ($mes_atual == '10') {$this->mes_nome = 'Outubro';
		} else if ($mes_atual == '11') {$this->mes_nome = 'Novembro';
		} else if ($mes_atual == '12') {$this->mes_nome = 'Desembro'; }

		$this->linhas = $linhas;
		$this->dia_inicial = $dia_inicial;
		$this->mes_atual = $mes_atual;
	}
//getters of calendar
	public function getDiaInicio() {
		return $this->dia_inicial;
	}
	public function getDiaLinhas() {
		return $this->linhas;
	}
	public function getMesAtual() {
		return $this->mes_atual;
	}
	public function getMesNome() {
		return $this->mes_nome;
	}

//database roms
	public function getRoms(){
		global $db;
		$sql = $db->prepare("SELECT * FROM project01_roms");
		$sql->execute();
		if ($sql->rowCount()>0) {
				$sql = $sql->fetchAll();
				$this->roms = $sql;
			}
		return $this->roms;
	}
	public function getQt(){
		global $db;
		$sql = $db->prepare("SELECT COUNT(*) as qt FROM project01_roms");
		$sql->execute();
		if ($sql->rowCount()>0) {
				$sql = $sql->fetchAll();
				$this->qt = $sql[0][0];
			}
		return $this->qt;
	}
	public function getAmountTotal($rom){
		global  $db;
		$sql = $db->prepare("SELECT COUNT(*) as amount FROM project01_stock WHERE rom = :rom");
		$sql->bindValue(":rom", $rom);
		$sql->execute();
		if ($sql->rowCount()>0) {
			$sql = $sql->fetchAll();
			return $sql[0]['amount'];
		}
	}
	public function getAmountStock($rom){
		global  $db;
		$sql = $db->prepare("SELECT COUNT(*) as amount FROM project01_stock WHERE rom = :rom AND vacancy = 'yes'");
		$sql->bindValue(":rom", $rom);
		$sql->execute();
		if ($sql->rowCount()>0) {
			$sql = $sql->fetchAll();
			return $sql[0]['amount'];
		}
	}

//verify, insert, name for test and report
	public function verifyPOST(){
		if (isset($_POST['rom']) && !empty($_POST['rom'])) {
			$rom = $_POST['rom'];
		}
		if (isset($_POST['lastName']) && !empty($_POST['lastName'])) {
			$lastName = $_POST['lastName'];			
		} else {
			header("Location: ".BASE_URL."projects/calendar?err=l");
		}

		if (isset($_POST['firstName']) && !empty($_POST['firstName'])) {
			$firstName = $_POST['firstName'];			
		} else {
			header("Location: ".BASE_URL."projects/calendar?err=f");
		}

		if (isset($_POST['days']) && !empty($_POST['days'])) {
			$days = $_POST['days'];
		} else {
			header("Location: ".BASE_URL."projects/calendar?err=p");
		}

		if (isset($_POST['date']) && !empty($_POST['date'])) {
			$date_init = $_POST['date'];
			$date_end = date('Y-m-d', strtotime($days.' days', strtotime($date_init)));			
		} else {
			header("Location: ".BASE_URL."projects/calendar?err=d");
		}	
		echo $firstName." ".$lastName." alugou ".$rom." por ".$days." dias de ".$date_init." até ".$date_end;

		if (!empty($rom) && !empty($firstName) && !empty($lastName) && !empty($date_init) && !empty($date_end) && !empty($days)) {
			$this->rent($rom, $firstName, $lastName, $date_init, $date_end, $days);
		} else {
			header("Location: ".BASE_URL."projects/calendar");
		}
		
		
	}

	private function rent($rom, $firstName, $lastName, $date_init, $date_end, $days){
		global $db;
		$sql = $db->prepare("SELECT * FROM project01_stock WHERE rom = :rom AND vacancy = 'yes'");
		$sql->bindValue(":rom", $rom);
		$sql->execute();
		if ($sql->rowCount()>0) {
			$sql = $sql->fetch();
			$rom_info = $sql;

			$sql = $db->prepare("UPDATE project01_stock SET vacancy = 'no', date_init = :date_init, date_end = :date_end WHERE id = :id");
			$sql->bindValue(":date_init", $date_init);
			$sql->bindValue(":date_end", $date_end);
			$sql->bindValue(":id", $rom_info['id']);
			$sql->execute();

				 if ($days = 1) {$price = 5.00;} 
			else if ($days = 2) {$price = 8.00;}
			else if ($days = 3) {$price = 10.00;}
			else if ($days = 4) {$price = 12.50;}
			else if ($days = 5) {$price = 15.00;}
			$user = $firstName." ".$lastName;

			$sql = $db->prepare("INSERT INTO project01_report SET rom = :rom, date_init = :date_init, date_end = :date_end, price = :price, user = :user");
			$sql->bindValue(":rom", $rom);
			$sql->bindValue(":date_init", $date_init);
			$sql->bindValue(":date_end", $date_end);
			$sql->bindValue(":price", $price);
			$sql->bindValue(":user", $user);
			$sql->execute();
			header("Location: ".BASE_URL."projects/calendar?ren=ok&dat=".$date_end);
		} else {
			header("Location: ".BASE_URL."projects/calendar?ren=notok");
		}
	}
	private function verifyRent(){
		global $db;
		$date_now = date('2018-10-18');
		$sql = $db->prepare("SELECT * FROM project01_stock WHERE vacancy = 'no'");
		$sql->execute();
		if ($sql->rowCount()>0) {
			$sql = $sql->fetch();
			$rom_info = $sql;

			$sql = $db->prepare("UPDATE project01_stock SET vacancy = 'yes', date_init = '0000-00-00', date_end = '0000-00-00' WHERE date_end = :date_end");
			$sql->bindValue(":date_end", $date_now);
			$sql->execute();
		}
	}

}
?>