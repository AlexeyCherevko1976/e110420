<?
   

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Page1</title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>��� ����</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">


    <link href="css/roboto.min.css" rel="stylesheet">
	<link href="css/material.min.css" rel="stylesheet">
	<link href="css/ripples.min.css" rel="stylesheet">
	
    <link href="css/application.css" rel="stylesheet">
<script src="http://code.jquery.com/jquery-latest.js"></script>
	<script>
		function display1(){
		    
		    var valText1= $('#text1').val();
		    var valPassword1 = $('#password1').val();
		    alert(valText1);
		    $.ajax({
		        type: "POST",
		        url: "analiz1.php",
		        data: {password1:valPassword1, check1:valCheck1}
		    }).done(function( result )
		        {
		            alert( " is "+result );
		        });
		}

	</script>

</head>
<body>
<div id="app" class="container-fluid">
	<div class="row">
		<div class="col-md-4 col-sm-6">
			<div class="panel panel-default">
				<form action="index.php" method="post" name="form1">
					<div class="form-group">
						<label for="inputText1">������� �����1</label>
						<input type="text" class="form-control" id="text1" name="text1" size="20">
						<small id="text1Help" class="form-text text-muted"> ���� ���� ������ �����1</small>
					</div>
					<div class="form-group">
						<label for="inputPassword1">Password1</label>
						<input type="password" class="form-control" id="password1" name="password1" size="20" placeholder="������">
					</div>
					<div class="form-check">
						<input type="checkbox" class="form-check-input" id="check1" name="check1">
						<label for="exampleCheck1" class="form-check-label"></label>
					</div>
					<input type="button" name="submit" value="submit" class="btn btn-primary" onClick="display1()">
					
				</form>				
			</div>
		</div>
	</div>
	<div class="insert2">
	</div>
	<div class="insert1">
		


	</div>
</div>


<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
