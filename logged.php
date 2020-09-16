<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ifood";
$pno=$_POST['phone'];

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "select password from signup where phone='$pno'";
$res=mysqli_query($conn, $sql);
if($row=mysqli_fetch_array($res)) {
if($row['password']==$_POST['password'])
{
	session_start();
	$_SESSION["name"]=$row['namne'];
	header('location:login.htm');
}
else
{
	echo "Wrong userid/PAssword";
}
}
?>