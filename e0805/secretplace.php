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
	<script>
		function getOut(){
			alert("Nado vyiti!");
			<?php //if(isset($_SESSION['logged_user'])){unset($_SESSION['logged_user']);} ?>
		}
	</script>
</head>
<body>
Привет, <?php echo $_SESSION['logged_user'] ?>, ты на секретной странице.<br>
<form method="post" action="./index.php">
	<input type="button" name="submit" value="submit" class="btn btn-primary" onClick="getOut()">
</form>

</body>
</html>