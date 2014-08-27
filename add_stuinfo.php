<?php
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>MintFive Information Management System ||Add Student </title>

<link rel="stylesheet" href="css/first_pag.css" type="text/css" />
<!--<link href="css/bootstrap.css" rel="stylesheet" type="text/css" />-->
<script type="text/javascript" src="java/login.js" ></script>
</head>

<body>
<div>.</div>

<!--wrap start div-->
<div id="wrap">
<!--Header start div-->
		<div id="header">
		<?php 
		include_once 'view/header.php';
		
		?>
		<?php
		include_once 'view/nev.php'; 
		?>
			
		<?php
	//	if ($_SESSION['a'] ='d')
	//		{
		//		echo' Valu add';
			//	session_destroy();
			//}
		//else 
		//{
		//}
		include_once 'view/add_stuinfo.php';
		echo "Add_stu.php"; 
		?>
</div>    
  
		<?php
		include_once 'view/footer.php'; 
		?>
			
				
				
				
		
		</div><!--head close div-->
		<!--wrap close div-->
		


</body>
</html>
