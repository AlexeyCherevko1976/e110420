<?php

/*include "setting.php";

$mysqli=new mysqli(HOST, USER, PASS, DBNAME);
if ($mysqli->connect_errno){
	echo "Не удалось соединиться!"; exit();
}
if($result=$mysqli->query("select * from `users` where id=1 ")){
	//print_r($result);
	//var_dump($result); exit();	
	//echo json_encode($result); exit();
	while($rws=mysqli_fetch_assoc($result)){
		echo "<pre>";
		print_r($rws);
		echo "</pre>";
	}
}
echo "Workes!";*/
?>

<html>
<head>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<script src="http://code.jquery.com/jquery-latest.js"></script>
<script>
function getdetails(){
    var name = $('#name').val();
    var rno = $('#rno').val();
    $.ajax({
        type: "POST",
        url: "analiz1.php",
        data: {fname:name, id:rno}
    }).done(function( result )
        {
            $("#msg").html( " Address of Roll no " +rno +" is "+result );
        });
}
function getdetails2(){
    var valLogin = $('#login1').val();
    var valPassword = $('#password1').val();
    $.ajax({
        type: "POST",
        //dataType:"json",
        url: "analiz1.php",
        data: {login:valLogin, password:valPassword}
    }).done(function( result )
        {
        	//let dataR=JSON.stringify(result);
        	let dataR=result;
        	//let dataR=JSON.stringify(result);
        	//let dataR=JSON.parse(result);
            //$("#msg").html( " Address of Roll no  is "+ JSON.stringify(dataR[1])+"<br><br>");
            $("#msg").html( " Address of Roll no  is "+ dataR+"<br><br>");
        });
}
</script>
</head>
<body>
<div id="app" class="container-fluid">
	<div class="row">
		<div class="col-8">
			<div id="msg"></div>
		</div>
		<div class="col-4">
			<div class="panel panel-default">


    

<form>
  <div class="form-group">
    <label for="login1">Login</label>
    <input type="text" class="form-control" id="login1"  placeholder="Enter login">
    <small id="loginHelp" class="form-text text-muted">Введите логин</small>
  </div>
  <div class="form-group">
    <label for="password1">Password</label>
    <input type="password" class="form-control" id="password1" placeholder="Password">
  </div>
  <div class="form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <!-- <button type="submit" class="btn btn-primary">Submit</button> -->
  <input type="button" name="submit" id="submit" value="submit" onClick = "getdetails2()" />
</form>
<div>
<!-- 	<?php
	include_once "db/Table.php";
	$usersTable=new Table();
	$data=$usersTable->createCommand("SELECT * FROM `users` ");
	echo $data."<br><br>";
	//$usersTable->getHost();
	echo $usersTable->dbname;
	?> -->
</div>


</div>
</div>
</div>
</div>
<!-- <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script> -->
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>