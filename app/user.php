<?
class User{
	public $signup;
	function __construct(){
		$signup=isset($_SESSION['user_signup']) ? $_SESSION['user_signup'] : "false";
	}
	function validate($login, $password){
		$this->signup= $login=="cleo" && $password="password" ? true:false;
        return 	$this->signup;
	}
	function close(){
		$_SESSION['user_signup']=$this->signup;
	}
}

?>