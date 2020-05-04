<?php
session_start();
if (!isset($_SESSION['signup'])){
	$_SESSION['signup']=false;
}
//include_once "page1.php";
include_once "page2.php";
include_once "db/Table.php";

if ($_POST['authorization']){
	$usersTable=new Table();
	$login = isset($_POST['login']) ? $_POST['login'] : "NOT LOGIN1";
	$password = isset($_POST['password']) ? $_POST['password'] : "NOT PASSWORD1";
	$data=$usersTable->createCommand("SELECT * FROM `users` WHERE `login`='".$login."' AND `password`='".$password."'");
	$_SESSION['signup']=true;
	echo "ffff";	
}



/*if (isset($_POST['text1'])){
	if($_POST['text1']=="parol")
		{//$_POST['insert1']="Yes, all gut!";
		echo "Yes, all gut!";die();
		//die($_POST['insert1']);
		}
	else{include_once "page1.php";}
}

$data="ssss";
	echo $data;
if (isset($_POST['text1'])){
	//$data = json_encode($_POST['text1'], true);
	$data="ssss";
	echo $data;
	//echo 'Данные приняты - ' . $_POST['text1'];
}
*/



?>