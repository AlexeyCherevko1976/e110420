<?
session_start();
include("./app/controller.php");
include("./app/user.php");
include("./app/view.php");
$app=new Controller();
$user=new User();
$view=new View();
$example="EXAMPLE";

echo $app->password;
echo $app->login;
$user->signup=($user->validate($app->login, $app->password) || !$app->outSignup) ? true : false;
$user_signup=$user->signup;

$user->close();
$view->pageInclude('index');

?>