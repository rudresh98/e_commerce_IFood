<?php
session_start();
$a=$_POST['tt1'];
$b=$_POST['tt2'];
$c=$_POST['tt3'];
$d=$_POST['tt4'];
$_SESSION['tt3']=$c;
$_SESSION['tt2']=$b;

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ifood";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO signup (name, phone, email,password) VALUES ('$a','$b','$c','$d')";

if (mysqli_query($conn, $sql)) {
	


    header('location:mail.php');
   // echo "<script>
   //    window.location.href = 'login.htm';
   //  </script>";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>