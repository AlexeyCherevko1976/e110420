<?
include "setting.php";
//class Table{
	public $host; //, $user, $pass, $dbName, $tableName, $mysqli;

//$data1=array("login"=>$login, "password"=>$password);


$mysqli=new mysqli(HOST, USER, PASS, DBNAME);/*
if ($mysqli->connect_errno){
	echo "Не удалось соединиться!"; exit();
}

$login=isset($_POST['login']) ? $_POST['login'] : null;
$password=isset($_POST['password']) ? $_POST['password'] : null;

	if($result=$mysqli->query("SELECT * FROM `users` WHERE login='".$login."' AND password='".$password."'")){

		while($rws=mysqli_fetch_assoc($result)){
			echo "<pre>";
			print_r($rws);
			echo "</pre>";
		}
		exit();
		}
		*/
//} //Table
?>