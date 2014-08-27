<?php
include_once('../db_connect/db_connect.php');
//////////////////////////////////////
// Upper Line is Database Connector 
///////////////////////////////////////

$sql="INSERT INTO  teacher_info  (name,dept,email,gender,degree,pass) VALUES ('$_POST[name]','$_POST[dept]','$_POST[email]','$_POST[gender]','$_POST[degree]',MD5('$_POST[pass]'))";


if (!mysql_query($sql,$con))
  {
   //header('Location:view/login_form_view.php')
  echo "<h2 align=\"center\"><font color=\"#FF0000\">Something Wrong</font></h1>".mysql_error();
   }
  else
{
echo "<h2 align=\"center\" style=\"color:#666666\">Successfully your account created</h2>";

}
mysql_close($con)
?>