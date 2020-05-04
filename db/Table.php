<?php
include "setting.php";
//include "./lib.php";

class Table{
	public $host, $user, $pass, $dbname; //$returns="zadralo!";
	function __construct(){
		$this->host=HOST;
		$this->user=USER;
		$this->pass=PASS;
		$this->dbname=DBNAME;
		//echo $returns;
		/*
		$mysqli=new mysqli(HOST, USER, PASS, DBNAME);
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
	}
	function createCommand($command){
		$mysqli=new mysqli($this->host, $this->user, $this->pass, $this->dbname);
		if ($mysqli->connect_errno){
			echo "Не удалось соединиться!"; exit();
		}

		if($result=$mysqli->query($command)){
			
			/*while($rws=mysqli_fetch_assoc($result)){
				echo "<pre>";
				print_r($rws);
				echo "</pre>";
			}*/
		    while($row = $result->fetch_array(MYSQLI_ASSOC)) {
		            $myArray[] = $row;
		    }
		    //echo json_encode($myArray);			
		}
		$result->close();
		$mysqli->close();
		
		return json_encode($myArray);//arrayExample();
		exit();
	}
	function getInfo(){
		echo HOST." ".USER." ".PASS." ".DBNAME;
		
	}
	//$ret="Hello!";
}

/*
$mysqli=new mysqli(HOST, USER, PASS, DBNAME);
if ($mysqli->connect_errno){
	echo "Не удалось соединиться!"; exit();
}

//if (isset($_POST[''])){$name=$_POST['name'];}
//if (isset($_POST['login'])){$login=$_POST['login']; echo $login;}
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
echo "Workes!";
*/
?>