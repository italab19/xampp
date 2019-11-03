
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "llogin";
$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql="INSERT INTO register VALUES('$_POST[name]','$_POST[username]','$_POST[password]','$_POST[rpassword]','$_POST[city]','$_POST[phno]')";
if (mysqli_query($conn, $sql)) {
   // echo "New record created successfully";
header('location: login.php');

} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>
