<!--
Here, we write code for registration.
-->
<?php
include 'config.php'; 
$fname = $lname =  $email = $password = $pwd = '';

$fname = $_POST['firstname'];
$lname = $_POST['lastname'];
 $email = $_POST['email'];
$password = $_POST['password'];
 
$sql = "INSERT INTO tbluser (Firstname,Lastname,Email,Password) VALUES ('$fname','$lname','$email','$password')";
$result = mysqli_query($conn, $sql);
if($result)
{
	 
	 header("Location: admin.php");
}
else
{
	echo "Error :".$sql;
}
?>