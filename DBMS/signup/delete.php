<?php
@include 'config.php';
// Check connection
session_start();
$s_email=$_SESSION['email'];
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$sql="DELETE from user_form where email= '$s_email'";

if (!mysqli_query($conn,$sql))
{
die('Error: ' . mysqli_error($conn));
}
echo "Record Deleted";
header("Refresh:3; url=login.php");

mysqli_close($conn);
?>