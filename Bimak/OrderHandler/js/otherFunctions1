function Validate()
{
	var dc = document.f.getElementById("country");
	var ac =  document.getElementById("country1");
     var dd =  document.getElementById("date");
	var da =  document.getElementById("date1");
	if(dc.value.length == "0")
	{
		document.getElementById("head").innerText = "All fields are mandatory";
		country.focus();
		return false;  
		
	}
	
	if(checkdcity(dc,"Please select your departure "))
	{
		if(checkacity(ac,"Please select your arrival"))
		{
			if(checkddate(dd,"Please select your departure date"))
			{
			if(checkadate(da,"please select your arrival date")){return true;}
				
			}	
			
		}
		
	}
	
	
	return false;
}

function checkdcity(inputtext,alertMsg)
{
	if(inputtext.value == "0")
	{document.getElementById("p1").innerText = alertMsg;
     inputtext.focus(); return false;
	}
	
	else
	{
		return true;
	}
}

function checkacity(inputtext,alertMsg)
{
	if(inputtext.value == "0")
	{
      document.getElementById('p2').innerText = alertMsg;
      inputtext.focus(); return false;
	}
	
	else
	{
		return true;
	}
}




function checkddate(inputtext,alertMsg)
{
	if(inputtext.value == "mm/dd/yyyy")
	{
		document.getElementById("p3").innerText = alertMsg;
		inputtext.focus(); return false;
	}
	
	else
	{
		return true;
	}
}

function checkadate(inputtext,alertMsg)
{
	if(inputtext.value == "mm/dd/yyyy")
	{
		document.getElementById("p4").innerText = alertMsg;
		inputtext.focus();return false;
	}
	
	else
	{
		return true;
	}
}


//......................................................................................


   
 function Validate() {
	   var des = document.getElementById("country");
         if(des.value = "0")
		{
            document.getElementById("p1") = "Please select an d!";
			
            return false;
		}	    
		
        
        else
        return true;
		
		
		
		
 }


