<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "llogin";
$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$uname = $_POST['username'];
session_start();
$_SESSION['username'] = $uname;

$pass = $_POST['password'];

$sql = "select * from register where username = '$uname' and password = '$pass'";
$res = mysqli_query($conn, $sql);
$row =  mysqli_fetch_array($res);
if ($row['username'] == $uname && $row['password'] == $pass) {
	
    //echo "Login successfully ".$row['password'];
	 header('location: detail.php');
} else {
	echo"Invalid details";
   header('location: login.php');
}

mysqli_close($conn);
?>

