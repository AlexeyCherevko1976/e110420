<?
session_start();
// 
if (isset($_SESSION['exam1'])){echo $_SESSION['exam1']."<br>";}else{echo "NOT<br>";}
$_SESSION['exam1']=isset($_SESSION['exam1']) ? $_SESSION['exam1']=$_SESSION['exam1']+1 : 1;
if (isset($_SESSION['exam1'])){echo $_SESSION['exam1'];}else{echo "NOT";}

?>
