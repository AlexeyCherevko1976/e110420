<?php
include "setting.php";

$mysqli=new mysqli(HOST, USER, PASS, DBNAME);
if ($mysqli->connect_errno){
	echo "Не удалось соединиться!"; exit();
}

//if (isset($_POST[''])){$name=$_POST['name'];}
//if (isset($_POST['login'])){$login=$_POST['login']; echo $login;}
$login=isset($_POST['login']) ? $_POST['login'] : null;
$password=isset($_POST['password']) ? $_POST['password'] : null;
//echo $login;
//if($result=$mysqli->query("select * from `users` where id=1 ")){
//if($result=$mysqli->query("select * from `users` where login=".$login." and password=".$password)){
if($result=$mysqli->query("SELECT * FROM `users` WHERE login='".$login."' AND password='".$password."'")){
	//print_r($result);
	//var_dump($result); exit();	
	//echo json_encode($result); exit();
	while($rws=mysqli_fetch_assoc($result)){
		echo "<pre>";
		print_r($rws);
		echo "</pre>";
	}
	exit();
}
echo "Workes!";
?>