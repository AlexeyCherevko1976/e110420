
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Введите пароль</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<script src="http://code.jquery.com/jquery-latest.js"></script>
</head>
<body>
<div id="app" class="container-fluid">
<div class="row">
	<div class="col-10"></div>
	<div class="col-2">
	<? if(!isset($_SESSION['logged_user'])){echo '
		<form action="" method="post">
			<div class="form-group">
				<label for="user_name">Логин</label>
				<input type="text" id="user_name" name="user_name" class="form-control" placeholder="Введите логин">
				<small id="loginHelp" class="form-text text-muted">Введите логин</small>
			</div>
			<div class="form-group">
				<label for="user_pass">Пароль</label>
				<input type="password"  id="user_pass" class="form-control" placeholder="Введите пароль">
			</div>
			<div class="form-check">
				<input type="checkbox" class="form-check-input" id="check1" name="check1">
				<label for="сheck1" class="form-check-label"></label>
			</div>			
			<input type="submit" value="Submit" name="Submit">
		</form>				
		';	}else{echo 
		'<div>Пользователь: <div class="text-primary">'.$_SESSION['logged_user'].'</div></div>
		<form action="" method="post">
			<input type="text" name="out" hidden id="out" value="ttt">
			<input type="submit" value="Выйти" name="Out">
		</form>';
		}
	?>

	</div>
</div>	
	
</div>


<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>