<?php
include_once('../db_connect/db_connect.php');
//////////////////////////////////////
// Upper Line is Database Connector 
///////////////////////////////////////


$sql=("UPDATE teacher_info SET name='$_POST[name]',dept='$_POST[dept]',email='$_POST[email]',gender='$_POST[gender]',degree='$_POST[degree]',pass=MD5('$_POST[pass]') WHERE id='$_POST[id]'");// Update table_name

//echo '$sql';

//$sql="INSERT INTO  student_info (name,dept,email,gender,cgpa,pass) VALUES ('$_POST[name]','$_POST[dept]','$_POST[email]','$_POST[gender]','$_POST[cgpa]',MD5('$_POST[pass]'))";


if (!mysql_query($sql,$con))
  {
  // header('Location:add_stuinfo.php');
  echo "<h2 align=\"center\"><font color=\"#FF0000\">Something Wrong</font></h1>".mysql_error();
  }
  else
{
//$_SESSION['a']='d';
//echo "<h2 align=\"center\" style=\"color:#666666\">Successfully your account created</h2>";
header('Location:../vp_teacher.php');
//echo "<h2 align=\"center\" style=\"color:#666666\">Successfully your account created</h2>";
}
mysql_close($con)
?>