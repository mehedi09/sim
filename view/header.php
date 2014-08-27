<div id="con">
							<font size="+1"><!--Find us --></font>
				</div> <!-- Con Div close-->
				<!-- Div ab Start-->
				<div id="ab">Mintfive Information Management System </div>
				<!-- Div ab Close-->
				<!--login div Start --><div align="right">Welcome 
								<?php 
						if(isset($_SESSION['us_name'])) 
						{
  						// this is true and will be executed
						//echo 
							echo  '<font color="#CC0066">'; echo $_SESSION['us_name']; echo '</font>';
							echo ' to MintFive &nbsp;&nbsp;';
							echo'<a href="./action/logout_action.php" ><img src="./image/logout.gif" alt="Logout" height="40px" width="40px" /></a>';
						}
						else
						{
							echo ' Guest';
							echo ' to MintFive  '; 
							echo'<a href="login.php"> Login </a>';
							 
						}
			  ?>  to MintFive
				</div><!-- login div close-->
				<!-- Div aa Start-->
  <div id="aa"> The Best Online Information Management System In Bangladesh </div> 
  <!-- Div aa Close-->
