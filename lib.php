<?

function arrayExample(){
	return " arrayExample ";
}

function echoPost($arrayPostVars){
	for ($i=0; $i < count($arrayPostVars); $i++) { 
		if (isset($_POST[$arrayPostVars[$i]])){echo $_POST[$arrayPostVars[$i]]."<br>";};};
	}
	//if (isset($_POST[$nameVar])){echo $_POST[$nameVar]."<br>";};};

?>