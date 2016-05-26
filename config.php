<?
ob_start();
$connect = mysql_connect('127.0.0.1','root','root');
$selectdb = mysql_select_db('asda 2');
define('uid',$_COOKIE['uid']);
define('login',$_COOKIE['login']);
$allinfo = mysql_query("SELECT * FROM account Where AccountId = '".uid."' ");
$fue = mysql_fetch_assoc($allinfo);
define('username',$fue['Name']);
define('type',$_GET['type']);
?>