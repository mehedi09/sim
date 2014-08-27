<?php
//session_start();
$con = mysql_connect("localhost","mintfive_mims","aiub09");//server=localhost  userName=minfiv_hotel_sys pass=aiub09
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("mintfive_mehedi", $con); //daName=minfiv_hotel_sys

$sq= "select * from teacher_info";
$result = mysql_query($sq);

if (!mysql_query($sq,$con))
  { 
  // header('Location:add_stuinfo.php');
  echo "<h2 align=\"center\"><font color=\"#FF0000\">Something Wrong</font></h1>".mysql_error();
  }
  else
{ //header('Location:../add_stuinfo.php');
echo "<h3 align=\"center\" style=\"color:#666666\"> All Teacher's Informetion </h3>";
}
mysql_close($con)
?>

<table width="800px" align="center" border="1">
<tr bordercolor="#0099FF">
	<th>ID</th>
	<th>Name</th>
	<th>Dept</th>
	<th>Degree</th>
	<th>Gender</th>
	<th>Email</th>
	<th>Edit</th>
	<th>Delete</th>
	</tr>

<?php
while($row = mysql_fetch_row($result))
{
	echo "<tr>";
	echo "<td align=\"center\">".$row[0]."</td>";
	echo "<td align=\"center\">".$row[1]."</td>";
	echo "<td align=\"center\">".$row[2]."</td>";
	echo "<td align=\"center\">".$row[3]."</td>";
	echo "<td align=\"center\">".$row[4]."</td>";
	echo "<td align=\"center\">".$row[6]."</td>";
	//echo "<td><img src='./main/".$row[4].".jpg' width='50px' height='50px' /></td>";
	//echo "<td><a href='showDtails.php?a=$row[0]'>Details</a></td>";
	echo "<td align=\"center\"><img src=\"image/edit.png\" alt=\"Edit pic\" width=\"25\" height=\"25\" /><a href='edit_teacherinfo.php?user_id=$row[0]&name=$row[1]&dept=$row[2]&email=$row[6]&gender=$row[4]&degree=$row[3]&pass=$row[5]'>Edit			</a></td>";
	
	echo "<td align=\"center\"><img src=\"image/DeleteRed.png\" alt=\"Delete pic\" width=\"25\" height=\"25\" /><a href='./action/delete_teacher.php?delete=$row[0]'>Delete</a></td>";

	echo "</tr>";
}
?>
</table>
