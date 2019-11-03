<!DOCTYPE html>
<html>
<head>
<title>Details-Customer</title>
<link rel = "stylesheet" href = "login.css">
</head>
<body>
<header>
<h1>LIBRARY OF INDIA </h1>
<h5>A GOVT OF INDIA INITIATIVE</h5>
</header>
<center>
<div id = "box">

<h2 style="background-color:rgb(34, 167, 240);color: white;">DETAILS</h2>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "llogin";
$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
session_start();
$uname = $_SESSION['username'];

$sql = "select * from detail where name = '$uname'";
$res = mysqli_query($conn, $sql);
$row =  mysqli_fetch_array($res);
if ($row['name'] == $uname) {
	$name = $row['name'];
	$libno = $row['libno'];
	$nobo = $row['nobo'];
	$fine = $row['fine'];
	$rdate = $row['rdate'];
}
else
{
	echo"No data available";
	exit(1);
}
echo"<center>";
echo "<h2 >NAME</h2>";
echo " ".$name;
echo nl2br("\n");
echo "<h2 >LIBRARY NUMBER</h2>";
echo " ".$libno;
echo nl2br("\n");
echo "<h2 >NO OF BOOKS TAKEN</h2>";
echo " ".$nobo;
echo nl2br("\n");
echo "<h2 >FINE AMOUNT</h2>";
echo " Rs ".$fine;
echo nl2br("\n");
echo "<h2 >RETURN DATE</h2>";
echo " ".$rdate;
echo nl2br("\n");
echo"</center>";
mysqli_close($conn);
?>
</center>
</div>
<div class="bottomright">
<a href="logout.php">LOG OUT</a>
</div>
<footer>
<p>&copy; Copyright To Library Of India<p>
</footer>
</body>
</html>
