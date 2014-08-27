<?php
include_once('../db_connect/db_connect.php');
//////////////////////////////////////
// Upper Line is Database Connector 
///////////////////////////////////////

	
$_SESSION['us_name']= $_POST['us_name'];
$us_name = $_POST['us_name'];
$pass = $_POST['pass'];
// quree pathailam ............................. 

$sql="SELECT * FROM log_info WHERE user_name = '$us_name' and pass='$pass'";

$result= mysql_query($sql);
//// Mysql_num_row is counting table row
$count=mysql_num_rows($result);

// If result matched $myusername and $mypassword, table row must be 1 row
if($count==1){
// Register $myusername, $mypassword and redirect to file "login_success.php"
session_register("user_name");
//session_register("mypassword"); 
header("location:../index.php");
//echo'Bal';//// echo hise......
}
else {
echo "Wrong Username or Password";
}
mysql_close($con)
?>