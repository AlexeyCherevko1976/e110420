<?
session_start();
include("./app/application.php");
if(!is_a($_SESSION['app'], 'application')){$_SESSION['app']=new application();}
//$_SESSION['app']=new application();
echo $_SESSION['app']->request->data;

$_SESSION['app']->post=$_POST;
if (isset($_SESSION['app']->post['user_name'])){echo $_SESSION['app']->post['user_name'];}
else{echo "not user_NAME";}

if ($_POST){
	//echo $_POST['Submit'];}
	if (($_POST['user_name']=="cleo") && $_POST["user_pass"]="password"){
		$_SESSION['logged_user']=$_POST['user_name'];

		//header("Location: secretplace.php"); exit();
		include("e0805/index.php"); exit();
	}
	if (($_POST['out'])){
		unset($_SESSION['logged_user']);
		include "e0805/index.php"; exit();
	}
//echo "Вы ввели неправильный пароль!";
}

include ("e0805/index.php");
/*
if (!isset($_SESSION['logged_user'])){
	header("Location: e0805/index.php"); exit();
}else{
	header("Location: e0805/secretplace.php"); exit();
}
*/
?>