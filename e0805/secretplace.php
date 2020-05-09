<?php
session_start();
if (!isset($_SESSION['logged_user'])){
	header("Location: index.php");
	exit();
}	
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Secretplace</title>
</head>
<body>
Привет, <?php echo $_SESSION['logged_user'] ?>, ты на секретной странице.
</body>
</html>