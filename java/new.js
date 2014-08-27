// JavaScript Document
function validateForm()
{

	var a=document.forms["myForm"]["username"].value;
	if (a==null || a=="")
  {
  //alert("Name must be filled out");
  document.getElementById("username1").innerHTML="  Insert User Name ";
  return false;
  }
  	else
	{
		  document.getElementById("username1").innerHTML="";
	}
  
  
  
  
  
	var x=document.forms["myForm"]["email1"].value;
	var atp=x.indexOf("@");
	var dot=x.lastIndexOf(".");
	if (atp<1 || dot<atp+2 || dot+2>=x.length)
  		{
			 document.getElementById("emal").innerHTML="  Insert Valid E-mail Adress ";
  return false;
  }
  	else
	{
		  document.getElementById("emal").innerHTML="";
	}
 
			
			




	var b=document.forms["myForm"]["cgpa"].value;
	if (b==null || b=="")
  {
	  	 document.getElementById("cgpa1").innerHTML="  Insert CGPA ";
  return false;
  }
  	else
	{
		  document.getElementById("cgpa1").innerHTML="";
	}
	  //alert("CGPA must be filled out");
	//return false;
	//} 
	
	
	var e=document.forms["myForm"]["cgpa"].value; 
  if (isNaN(e) || e<=0 || e>4)//isNaN holo akta biltin library....
 {
	  	 document.getElementById("cgpa1").innerHTML="  Insert CGPA ";
  return false;
  }
  	else
	{
		  document.getElementById("cgpa1").innerHTML="";
	}
	//alert ("CGPA must set");
	//return false;
	//} 
	
	
	

  
   var c=document.forms["myForm"]["pass1"].value;
	if (c==null || c=="")
  {
	  document.getElementById("pas").innerHTML="  Insert Pass ";
  return false;
  }
  	else
	{
		  document.getElementById("pas").innerHTML="";
	}
	 // alert("Password must be filled out");
//	return false;
//	}  
  
  
  
  var d=document.forms["myForm"]["gender"][0].checked || document.forms["myForm"]["gender"][1].checked; 
  if (!d)
 {
	//alert ("Select Gender");
	  document.getElementById("gender1").innerHTML="  Select Gender ";
  return false;
  }
  	else
	{
		  document.getElementById("gender1").innerHTML="";
	}






  
  
  	var f=document.forms["myForm"]["dept"].value;
	if(f=="Dept:")
	{
		document.getElementById("dept1").innerHTML="  Select Gender ";
  return false;
  }
  	else
	{
		  document.getElementById("dept1").innerHTML="";
	}






		//alert("Select Dept ");
//		return false;
//		}
//	
	
	
	var g=document.forms["myForm"]["day"].value;
	if(g=="Day:")
	{
		
		document.getElementById("day1").innerHTML="  Select Date of Birth [ Day] ";
  return false;
  }
  	else
	{
		  document.getElementById("day1").innerHTML="";
	}
	//	alert("Select Day ");
//		return false;
//		}
//	
	
	
	var h=document.forms["myForm"]["month"].value;
	if(h=="Month:")
	{
		
		document.getElementById("month1").innerHTML="  Select Date of Birth [ Month] ";
  return false;
  }
  	else
	{
		  document.getElementById("month1").innerHTML="";
	}
		
		//
//		alert("Select Month ");
//		return false;
//		}
//	
	var i=document.forms["myForm"]["year"].value;
	if(i=="Year:")
	{
		
		document.getElementById("year1").innerHTML="  Select Date of Birth  [ Year ]";
  return false;
  }
  	else
	{
		  document.getElementById("year1").innerHTML="";
	}
		//
//		alert("Select Year ");
//		return false;
//		}
	
	
	
	
	
  
}