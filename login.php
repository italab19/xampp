<!DOCTYPE html>
<html>
<head>
<title>Login-Customer</title>

<link rel = "stylesheet" href = "style.css">
</head>
<body>

<header>
<h1>LIBRARY OF INDIA </h1>
<h5>A GOVT OF INDIA INITIATIVE</h5>
</header>
<center>
<div id = "box">
<h2 style="background-color:rgb(34, 167, 240);color: white;">SIGN IN</h2>
<form action = "details.php" method = "post" onsubmit = "return validation();">
USERNAME<input type = "text" name = "username" id = "name">
<br><br>
PASSWORD<input type = "password" name = "password" id = "password">
<br>

<div id = "eresult" style = "color:red;">
</div>
<center>
<input type="submit" value="LOGIN"> 
<div id = "lin">
<a href="register.php" >NEW USER ? SIGN UP</a>
</div>
</center>
</form>
</div>
</center>
<br>
<br>
<script type = "text/javascript">
function validation()
{
	var name = document.getElementById('name').value;
	var password = document.getElementById('password').value;
	if(name == '')
	{
		document.getElementById("eresult").innerHTML = "Username required";
		return false;
	}
	if(password == '')
	{
		document.getElementById("eresult").innerHTML = "Password required";
		return false;
	}
	else
	{
		return true;
	}
}
</script>
<?php
session_start();
?>
<footer>
<p>&copy; Copyright To Library Of India<p>
</footer>
</body>
</html>
