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

//function calendar
	public function __construct(){

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

//database
	public function getRoms(){
		global $db;
		$sql = $db->prepare("SELECT * FROM project01_snes");
		$sql->execute();
		if ($sql->rowCount()>0) {
				$sql = $sql->fetchAll();
				$this->roms = $sql;
				print_r($sql);echo "<br/>";
			}
		return $this->roms;
	}
	public function getQt(){
		global $db;
		$sql = $db->prepare("SELECT COUNT(*) as qt FROM project01_snes");
		$sql->execute();
		if ($sql->rowCount()>0) {
				$sql = $sql->fetchAll();
				$this->qt = $sql[0][0];
				print_r($sql);
			}
		return $this->qt;
	}
}
?>