<?php
class Login extends model{

	public function verifyLoggedIn(){
		if (isset($_SESSION['id']) && !empty($_SESSION['id'])) {
			header("Location: system");
		}
	}

	public function verifyLoggedOut(){
		if (!isset($_SESSION['id']) || empty($_SESSION['id'])) {
			header("Location: login");
		}
	}

	public function logoff(){
		session_unset($_SESSION);
		header("Location: ../login");
	}

	
	
	public function verifyLogin(){
		if (isset($_POST['user']) && isset($_POST['pass']) && !empty($_POST['user']) && !empty($_POST['pass'])) {
			
			$user = addslashes($_POST['user']);
			$pass = md5(addslashes($_POST['pass']));

			$sql = $this->db->prepare("SELECT * FROM users_system WHERE user = :user AND pass = :pass");
			$sql->bindValue(":user", $user);
			$sql->bindValue(":pass", $pass);
			$sql->execute();
			if ($sql->rowCount() > 0) {
						$sql = $sql->fetch();
						$_SESSION['id'] = $sql['id'];
						$_SESSION['name'] = $sql['user'];
						header("Location: system");
					}		
		}
	}
}
?>