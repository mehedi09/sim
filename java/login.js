// JavaScript Document


function logValidation()  
{
		var u_n = document.forms["log"]["us_name"].value;
		
				if (u_n==null || u_n=="")
			  {
			  //alert("user Name must be filled out");
			  document.getElementById("use1").innerHTML="  Insert User Name ";
			  return false;
			  }
				else
				{
					  document.getElementById("use1").innerHTML="";
				}
		var passw = document.forms["log"]["pass"].value;
		
				if (passw==null || passw=="")
			  {
			  	//alert("user Name must be filled out");
			  	document.getElementById("pass1").innerHTML="  Insert Password ";
			  	return false;
			  		}
					else
					{
					  document.getElementById("pass1").innerHTML="";
					}
	  


}