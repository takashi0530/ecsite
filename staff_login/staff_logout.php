<?php
session_start();
$_SESSION = array();
if(isset($_COOKIE[session_name()]) == true) {
	setcookie(session_name(), '', time()-42000, '/');
}
session_destroy();

?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<meta charset="UTF-8">
<title>ろくまる農園</title>
</head>
<body>

ログアウトしました<br>
<br>
<a href="../staff_login/staff_login.html">ログイン画面へ</a>

</body>
</html>
