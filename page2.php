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
<script src="js/application.js"></script>

<script>

function authorization(){
    var valLogin = $('#login1').val();
    var valPassword = $('#password1').val();
    alert("fffff");
    //var authorization=true;
    /*$.ajax({
        type: "POST",
        //dataType:"json",
        url: "index.php",
        data: {login:valLogin, password:valPassword, authorization:true}
    }).done(function( result )
        {
        	//let dataR=JSON.stringify(result);
        	let dataR=result;
        	//let dataR=JSON.stringify(result);
        	//let dataR=JSON.parse(result);
            //$("#msg").html( " Address of Roll no  is "+ JSON.stringify(dataR[1])+"<br><br>");
            $("#msg").html( " Address of Roll no  is "+ dataR+"<br><br>");
        });*/
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
			<div class="panel panel-default" id="signup">

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
<script>
  $(document).ready(function(){
    app.displaySignup();
    //$("#msg").html("displayMsg() Workes!"); //app.displayMsg();
  })
</script>
</body>
</html>
