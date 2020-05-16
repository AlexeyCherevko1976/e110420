<?
session_start();

class Controller{
	public $login, $password, $outSignup;
	function __construct(){
		$this->login=isset($_POST['user_name']) ? $_POST['user_name'] : false;
		$this->password=isset($_POST['user_pass']) ? $_POST['user_pass'] : false;

		$this->outSignup=isset($_POST['out']) ? "true" : "false";
	}
	function outSignup55(){
		return isset($_POST['out']) ? "true" : "false";
	}

}

?>