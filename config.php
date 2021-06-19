<?php
$conn = mysqli_connect('localhost','root','','test2') ;
if ($conn == null) {
    die("Connection failed: " . mysqli_connect_error());
}
//echo "Connected successfully";
?>
