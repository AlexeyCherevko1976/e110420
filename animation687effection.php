<!DOCTYPE html>
<html>
	<head>
		<title>Использование jQuery метода .animate() (продолжительность, скорость, callback)</title>
		<style>CSS стили
div {
width: 80px; /* ширина элемента */	
height: 80px; /* высота элемента */	
border: 1px solid violet; /* сплошная граница размером 1 пиксель цвета violet */	
margin-top: 50px; /* внешний отступ от верхнего края элемента */	
}
</style>		
		<script src = "https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
		<script>
	$( document ).ready(function(){
	  $( ".start" ).click(function(){ // задаем функцию при нажатиии на элемент с классом start
	    $( "div" ).animate({
	      width: "90%", // ширина элемента
	      opacity: 0.5, // прозрачность элемента
	      height: "150px", // высота элемента
	      fontSize: "2em", // размер шрифта элемента
	      borderWidth: "5px" // ширина границ элемента
	    }, 1500, "linear", function(){
	      $( this ).text("Thats all folks!").css("color", "green");	// изменяем текстовое содержимое нашему блоку и указываем цвет текста
	    });
	  });
	});
		</script>
	</head>
	<body>
		<button class = "start">Метод .animate()</button>
		<div>Animate me</div>
	</body>
</html>