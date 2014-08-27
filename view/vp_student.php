<?php
//session_start();
$con = mysql_connect("localhost","mintfive_mims","aiub09");//server=localhost  userName=minfiv_hotel_sys pass=aiub09
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("mintfive_mehedi", $con); //daName=minfiv_hotel_sys

$sq= "select * from student_info";
$result = mysql_query($sq);

if (!mysql_query($sq,$con))
  { 
  // header('Location:add_stuinfo.php');
  echo "<h2 align=\"center\"><font color=\"#FF0000\">Something Wrong</font></h1>".mysql_error();
  }
  else
{ //header('Location:../add_stuinfo.php');
echo "<h3 align=\"center\" style=\"color:#666666\"> All Students Informetion </h3>";
}
mysql_close($con)
?>

<table width="800px" align="center" border="1">
<tr bordercolor="#0099FF">
	<th>ID</th>
	<th>Name</th>
	<th>Dept</th>
	<th>Email</th>
	<th>Gender</th>
	<th>Cgpa</th>
	<th>password</th>
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
	echo "<td align=\"center\">".$row[5]."</td>";
	echo "<td align=\"center\">".$row[6]."</td>";
	//echo "<td><img src='./main/".$row[4].".jpg' width='50px' height='50px' /></td>";
	//echo "<td align=\"center\"><a href='showDtails.php?a=$row[0]'>Details</a></td>";
	echo "<td align=\"center\"><img src=\"image/edit.png\" alt=\"Edit pic\" width=\"25\" height=\"25\" />
	
	<a href='edit_stuinfo.php?user_id=$row[0]&name=$row[1]&dept=$row[2]&email=$row[3]&gender=$row[4]&cgpa=$row[5]&pass=$row[6]';> 
Edit			</a></td>";

//remember the thing that you modna just have done...its took lots of time ..Sala bal....  but moja pailam..:)
	echo "<td align=\"center\"><img src=\"image/DeleteRed.png\" alt=\"Delete pic\" width=\"25\" height=\"25\" /><a href='./action/delete_student.php?delete=$row[0]'>Delete</a></td>";
	
	echo "</tr>";
}
?>
</table>

<!--<?php /*?>
<a href="edit_stuinfo.php?user_id=<?php echo"$row[0]"; ?>&name=<?php echo"$row[1]"; ?>&Dept=<?php echo"$row[2]"; ?>&email=<?php echo"$row[3]";?>&gender=<?php echo"$row[4]"; ?>&cgpa=<?php echo"$row[5]"; 
<?php */?>
-->
