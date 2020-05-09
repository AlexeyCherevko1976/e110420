<?php
session_start();
if ($_POST){
	//echo $_POST['Submit'];}
	if (($_POST['user_name']=="cleo") && $_POST["user_pass"]="password"){
		$_SESSION['logged_user']=$_POST['user_name'];

		header("Location: secretplace.php"); exit();
	}
//echo "Вы ввели неправильный пароль!";
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Authorize</title>
</head>
<body>
	Вы ввели неправильный пароль!
</body>
</html>