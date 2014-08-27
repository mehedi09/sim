<div id="add_stuinfo">
<form action="action/update_student.php" name="add_stuinfo" method="post" onSubmit="return validateForm()" id="add_stuinfo" >
<table align="center" width="500px" border="0">
	<tr>
		<td colspan="2" align="center" bgcolor="#99FFFF"> <h3>Edit Student Information</h3></td>
	</tr>
	
	<tr>
	<td colspan="1" align="center">Id :</td>
	<td colspan="1" align="center"><input name="id" value="<?php echo "$_GET[user_id]"; ?>" />
	
	</td>
	</tr>
	<tr>
		<td align="center"><label for="name">Name:</label></td>
		<td colspan="2" align="center"> <input type="text" name="name" id="name" width="250px" value="<?php echo "$_GET[name]"; ?>" /><label id="name1" style="color:#FF0000"></label></td>
	</tr>
	
	<tr>
		<td align="center"><label for="dept">Department</label></td>
		<td colspan="2" align="center">
		<select style="width:250px" id="dept"  name="dept" >
<?php if($_GET[dept]=="EEE"){
		echo "<option>Dept:</option>
        <option selected=\"selected\" value=\"EEE\">EEE</option>
        <option value=\"CSE\">CSE</option>
        <option value=\"CS\">CS</option>";

		}
		elseif ($_GET[dept]=="CSE") {
			echo "<option>Dept:</option>
        <option value=\"EEE\">EEE</option>
        <option selected=\"selected\" value=\"CSE\">CSE</option>
        <option value=\"CS\">CS</option>";
		}
		elseif ($_GET[dept]=="CS") {
			echo "<option>Dept:</option>
        <option value=\"EEE\">EEE</option>
        <option value=\"CSE\">CSE</option>
        <option selected=\"selected\" value=\"CS\">CS</option>";
		}
		else{
			echo "<option>Dept:</option>
        <option value=\"EEE\">EEE</option>
        <option value=\"CSE\">CSE</option>
        <option value=\"CS\">CS</option>";
		}
?></select>
<label id="dept1" style="color:#FF0000"></label></td>
	</tr>
	<tr>
		<td align="center"><label for="email">E-mail:</label></td>
		<td align="center"><input type="text" name="email" id="email" width="320px" value="<?php echo "$_GET[email]"; ?>" />
		<label id="email1" style="color:#FF0000"></label></td>
	</tr>
	<tr>
		<td align="center"><label for="gender">Gender:</label></td>
		<td colspan="1" align="center">
		<fieldset style="width:250px" id="gender">
		<?php
			if ($_GET[gender]=="Male")
			{
				echo'<input checked="checked" type="radio" name="gender" value="Male"/> Male</label>';
				echo'<input type="radio" name="gender" value="Female"/> Female</label>';
		
	
			}
			else 
			{
				echo'<input checked="checked" type="radio" name="gender" value="Male"/> Male</label>';
				echo'<input checked="checked" type="radio" name="gender" value="Female"/> Female</label>';
		
			}
		
		 ?>
		</fieldset>
		<label id="gender1" style="color:#FF0000"></label>
</td>
	</tr>
	<tr>
		<td align="center"><label for="cgpa">CGPA:</label></td>
		<td align="center"><input type="text" name="cgpa"  id="cgpa" width="250px" value="<?php echo "$_GET[cgpa]"; ?>"/></td><label id="cgpa1" style="color:#FF0000"></label>
	</tr>	
	<tr>
		<td align="center"><label for="pass">Password:</label></td>
		<td align="center"><input type="password" name="pass"  id="pass" width="250px" value="<?php echo "$_GET[pass]"; ?>"/></td><label id="pass1" style="color:#FF0000"></label>
	</tr>
	<tr>
	<td colspan="3"><hr /></td>
	</tr>
	<tr>
	<td colspan="3" align="center"><input width="280px" type="submit" name="submit" value="Submit" size="222px" id="submit" /></td>
	</tr>


</table>

</form>
</div>