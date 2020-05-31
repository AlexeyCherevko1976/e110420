
<? include_once "lib.php"; ?>
<?
   
/*if (isset($_POST['text1'])){
	//$data = json_encode($_POST['text1'], true);
	$data="ssss";
	echo $data;
	//echo 'Данные приняты - ' . $_POST['text1'];
}*/
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Плагин jQuerry</title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">


    <link href="css/roboto.min.css" rel="stylesheet">
	<link href="css/material.min.css" rel="stylesheet">
	<link href="css/ripples.min.css" rel="stylesheet">
	
    <link href="css/application.css" rel="stylesheet">
<script src="http://code.jquery.com/jquery-latest.js"></script>
<script>
$(document).ready(function(){
		$('#b1').css('backgroundColor', 'green');
//$('#b2').responsiveBlock();

(function($){
  jQuery.fn.responsiveBlock = function(options){
    // Зададим список свойств и укажем для них значения по умолчанию.
    // Если при вызове метода будут указаны пользовательские
    // варианты некоторых из них, то они автоматически перепишут
    // соответствующие значения по умолчанию
    options = $.extend({
      defColor:"white", //цвет элемента над которым нет курсора
      hoverColor:"red" //цвет элемента на который наведен курсор
    }, options};
 
    var make = function(){
      // реализация работы метода с отдельным элементом страницы
    };
 
    return this.each(make); 
    // в итоге, метод responsiveBlock вернет текущий объект jQuery обратно
  };
})(jQuery);
 
// теперь можно задавать плагин с настройками по умолчанию:
$('div:first').responsiveBlock();
 
// или указать свои значения некоторых или всех настроек
$('div:last').responsiveBlock({defColor:"#bbbbbb"});
$('ul').responsiveBlock({defColor:"#aaaaaa", hoverColor:"green"});


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
<div class="row">
		<div class="col-md-2" id="b1"></div>
		<div class="col-md-2" id="b2"></div>
		<div class="col-md-2" id="b3"></div>
		<div class="col-md-2" id="b4"></div>
		<div class="col-md-2" id="b5"></div>
		<div class="col-md-2 ">
			<div class="panel panel-default">
				<form action="index.php" method="post" name="form1">
					<div class="form-group">
						<label for="inputText1">Введите текст1</label>
						<input type="text" class="form-control" id="text1" name="text1" size="20">
						<small id="text1Help" class="form-text text-muted"> Сюда надо внести текст1</small>
					</div>
					<div class="form-group">
						<label for="inputPassword1">Password1</label>
						<input type="password" class="form-control" id="password1" name="password1" size="20" placeholder="Пароль">
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
		
		<? //echoPost(["text1", "password1", "check1", "submit", "form1"]); ?>
		<?php //if (isset($_POST["text1"])){echo $_POST["text1"]."<br>";}; 
		/*
		if (isset($_POST["insert1"])){echo $_POST["insert1"]."<br>";}
		 if(isset($_POST)){
			foreach ($_POST as $key => $value) {
				echo $key."=>".$value."<br>";
				//print_r($key)." ".print_r($value)."<br>";
		 	} 	
		 }*/
		 
		?>

	</div>
</div>


<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
