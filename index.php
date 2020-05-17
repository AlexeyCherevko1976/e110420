<?
session_start();
include("./app/controller.php");
include("./app/user.php");
include("./app/view.php");
$app=new Controller();
$user=new User();
$view=new View();

echo $user->signup==false ? "FALSE" : "TRUE";
$user->signup=((!$user->signup && $user->validate($app->login, $app->password)) || ($user->signup && !$app->outSignup)) ? true : false;


$user_signup=$user->signup; $app_login=$app->login;
$view->pageInclude('index');

$user->close();


?>