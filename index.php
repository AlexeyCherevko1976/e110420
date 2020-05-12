<?
session_start();

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