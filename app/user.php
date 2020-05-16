<?
class User{
	public $signup;
	function __construct(){
		$signup=isset($_SESSION['user_signup']) ? $_SESSION['user_signup'] : false;
	}
	function validate($login, $password){
		$validate= ($login=="cleo" && $password="password") ? true : false;
        return 	$validate;
	}
	function close(){
		$_SESSION['user_signup']=$this->signup;
	}
}

?>