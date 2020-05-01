<?
include "db/Table.php";
$usersTable=new Table();
//$usersTable->return="Hello";
//echo $usersTable->getInfo();
$login = isset($_POST['login']) ? $_POST['login'] : "NOT LOGIN1";
//$login = "NOT LOGIN1";
$password = isset($_POST['password']) ? $_POST['password'] : "NOT PASSWORD1";

//$data=$usersTable->createCommand("SELECT * FROM `users` WHERE `login`='misha' AND `password`='0002'");
$data=$usersTable->createCommand("SELECT * FROM `users` WHERE `login`='".$login."' AND `password`='".$password."'");
echo $data;
	
?>