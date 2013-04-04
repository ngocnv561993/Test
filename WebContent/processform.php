<?php
$name = $_POST['UserName'];
$pass = $_POST['Pass'];
define('USER', 'ngocnv_56');
DEFINE('PASS', 'gomiass');
if($name == USER){
	if($pass == PASS) ECHO "<font color = blue><b><p> Dang nhap thanh cong!!!</p></b>";
	else echo "<p><font color = red ><b>Sai mat khau!!!</b>";
}else echo "<p><font color = red ><b>Tai khoan chua dang ki!!!</b>";
?>