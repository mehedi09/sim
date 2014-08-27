<?php
include_once('../db_connect/db_connect.php');
//////////////////////////////////////
// Upper Line is Database Connector 
///////////////////////////////////////
$sql="DELETE FROM student_info WHERE id ='$_GET[delete]'";
// echo $sql;
if (!mysql_query($sql,$con))
  	{
  			// header('Location:add_stuinfo.php');
  	echo "<h2 align=\"center\"><font color=\"#FF0000\">Something Wrong</font></h1>".mysql_error();
  }
  else
{

header('Location:../vp_student.php');
//echo "<h2 align=\"center\" style=\"color:#666666\">Successfully your account created</h2>";
}
mysql_close($con)
?>