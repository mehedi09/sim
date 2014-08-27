<?php
session_start();
$con = mysql_connect("localhost","skydel_mims","aiub09");//server=localhost  userName=minfiv_hotel_sys pass=aiub09
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("mintfive_mehedi", $con);
?>