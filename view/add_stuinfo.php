<div id="add_stuinfo">
<form action="action/add_student.php" name="add_stuinfo" method="post" onsubmit="return validateForm()" id="add_stuinfo" >
<table align="center" width="500px" border="0">
	<tr>
		<td colspan="3" align="center" bgcolor="#99FFFF"> <h3>Add Student Information</h3></td>
	</tr>
	
	<tr>
		<td align="center"><label for="name">Name:</label></td>
		<td colspan="2"> <input type="text" name="name" id="name" /><samp style="color:#FF0000">*</samp> <label id="name1" style="color:#FF0000"></label></td>
	</tr>
	
	<tr>
		<td align="center"><label for="dept">Department</label></td>
		<td colspan="2"><select style="width:100px" id="dept"  name="dept" >
						  <option>Dept:</option>
						  <option value="EEE">EEE</option>
						  <option value="CSE">CSE</option>
						  <option value="CS">CS</option
					></select><label id="dept1" style="color:#FF0000"></label></td>
	</tr>
	<tr>
		<td align="center"><label for="email">E-mail:</label></td>
		<td><input type="text" name="email" id="email" /><label id="email1" style="color:#FF0000"></label></td>
	</tr>
	<tr>
		<td align="center"><label for="gender">Gender:</label></td>
		<td colspan="1">
		<fieldset style="width:70px" id="gender">
				<input type="radio" name="gender" value="Male"/> Male</label>
				<input type="radio" name="gender" value="Female"/> Female</label>
		</fieldset>
		<label id="gender1" style="color:#FF0000"></label>
</td>
	</tr>
	<tr>
		<td align="center"><label for="cgpa">CGPA:</label></td>
		<td><input type="text" name="cgpa"  id="cgpa"/></td><label id="cgpa1" style="color:#FF0000"></label>
	</tr>	
	<tr>
		<td align="center"><label for="pass">Password:</label></td>
		<td><input type="password" name="pass"  id="pass"/></td><label id="pass1" style="color:#FF0000"></label>
	</tr>
	<tr>
	<td colspan="3"><hr /></td>
	</tr>
	<tr>
	<td colspan="3" align="center"><input type="submit" name="submit" value="Submit" size="222px" id="submit" /></td>
	</tr>


</table>

</form>
</div>