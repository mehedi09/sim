<?php 

session_start();

session_destroy();
unset ($_SESSION['us_name']);
//echo $_SESSION['us_name'];
if (is_null($_SESSION['us_name'])) 
{
    header('location:../index.php');

}
?>