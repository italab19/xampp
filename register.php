<html>
<head>
<title>
Register-Customer
</title>
<link rel = "stylesheet" href = "login.css">
</head>
<body>
<header>
<h1>LIBRARY OF INDIA </h1>
<h5>A GOVT OF INDIA INITIATIVE</h5>
</header>
<center>
<div id = "box">
<h2 style="background-color:rgb(34, 167, 240);color: white;">REGISTER</h2>
<center>
<form action= "insert.php" method="POST" onsubmit = "return validation();">
NAME<input type="text" name="name" id = "name">
<br>
<br>
USER NAME<input type="text" name="username" id = "uname">
<br>
<br>
PASSWORD<input type="password" name="password" id = "password">
<br>
<br>
RETYPE PASSWORD<input type="password" name="rpassword" id = "rpassword">
<br>
<br>
CITY<input type="text" name="city" id = "city">
<br>
<br>
MOBILE NO<input type="int" name="phno" id = "phno">
<br>
<br>
<div id = "eresult" style = "color:red;">
</div>
<input type="submit" value="SUBMIT">

<!--<center><footer><a href="login.php">Go to Login</a></footer>-->
</form>
</div>
<script type = "text/javascript">
function validation()
{
	var name = document.getElementById('name').value;
	var uname = document.getElementById('uname').value;
	var password = document.getElementById('password').value;
	var rpassword = document.getElementById('rpassword').value;
	var city = document.getElementById('city').value;
	var phno = document.getElementById('phno').value;
	if(name == '')
	{
		document.getElementById("eresult").innerHTML = "Name required";
		return false;
	}
	if(uname == '')
	{
		document.getElementById("eresult").innerHTML = "User name required";
		return false;
	}
	if(password == '')
	{
		document.getElementById("eresult").innerHTML = "Password required";
		return false;
	}
	if(rpassword == '')
	{
		document.getElementById("eresult").innerHTML = "Retyping password required";
		return false;
	}
	if(city == '')
	{
		document.getElementById("eresult").innerHTML = "City required";
		return false;
	}
	if(phno == '')
	{
		document.getElementById("eresult").innerHTML = "Mobile number required";
		return false;
	}
	if(password != rpassword)
	{
		document.getElementById("eresult").innerHTML = "Password mismatch";
		return false;
	}
	else
	{
		return true;
	}
}
</script>
</center>
<footer>
<p>&copy; Copyright To Library Of India<p>
</footer>
</body>
</html>
