<?
include"config.php";

if(type == 'logout'){
	
	setcookie("uid",null,time()+60*60*24);
	setcookie("login",'0',time()+60*60*24);
	header('Location: index.php');
	
}



?>