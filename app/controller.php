<?
session_start();

class Controller{
	public $post, $session, $login, $password, $outSignup;
	function __construct(){
		$this->login=isset($_POST['user_name']) ? $_POST['user_name'] : false;
		$this->password=isset($_POST['user_pass']) ? $_POST['user_pass'] : false;
		$this->outSignup=isset($_POST['out']) ? true : false;
	}

}

?>