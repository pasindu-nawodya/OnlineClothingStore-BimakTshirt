
$(document).ready(function() {
 
 	$('#dType').change(function() {
  	if( $(this).val() == 1) {
       		
	   
	   
	   $('#vId').prop( "disabled", false );
	   $('#Regno').prop( "disabled", false );
	    $('#vType').prop( "disabled", false );
      $('#emp').prop( "disabled", false );
	   $('#empName').prop( "disabled", false );
	   $('#courier').prop( "disabled", true );
	 
    } else {       
	 
	 
	  $('#vId').prop( "disabled", true );
	   $('#Regno').prop( "disabled", true );
	    $('#vType').prop( "disabled", true );
      $('#emp').prop( "disabled", true );
	   $('#empName').prop( "disabled", true );
	    $('#courier').prop( "disabled", false );
    }
  });
 
});

function ValidateDelivery()
{
	var oId = document.getElementById("oId");
	var cName=  document.getElementById("cName");
     var no =  document.getElementById("no");
	var city =  document.getElementById("city");
	var province = document.getElementById("province");
	var emp = document.getElementById("emp");
	var empName = document.getElementById("empName");
	var vId = document.getElementById("vId");
	var Regno= document.getElementById("Regno");
	var vType= document.getElementById("vType");
	if(oId.value == "1")
	{
		document.getElementById("head").innerText = "All fields are mandatory";
		country.focus();
		return false;  
		
	}
	
	if(checkoid(oId,"Please enter order id"))
	{
		if(checkcName(cName,"Please enter customer name"))
		{
			if(checkno(no,"Please enter no"))
			{
			    if(checkcity(city,"please enter city"))
				{
					if(checkprovince(province,"please select the province"))
					{
						if(checkemp(emp,"please enter the employee id"))
						{
							if(checkempName(empName,"please enter the employee name"))
							{
								if(checkvId(vId,"please enter the vehicle id"))
								{
								  if(checkRegno(Regno,"please enter the vehicle registration number"))
								  {
									if(checkvType(vType,"please select the vehicle type")){
										
										return true;
									}
									
								  }
									  
									
									
								}
							}
							
						}
						
						
					}
					
					
				}
				
			}	
			
		}
		
	}
	
	
	return false;
}

function checkoid(inputtext,alertMsg)
{
	if(inputtext.value == "")
	{document.getElementById("head").innerText = alertMsg;
     inputtext.focus(); return false;
	}
	
	else
	{
		return true;
	}
}

function checkcName(inputtext,alertMsg)
{
	if(inputtext.value == "0")
	{
      document.getElementById('head').innerText = alertMsg;
      inputtext.focus(); return false;
	}
	
	else
	{
		return true;
	}
}




function checkno(inputtext,alertMsg)
{
	if(inputtext.value == "0")
	{
		document.getElementById('head').innerText = alertMsg;
		inputtext.focus(); return false;
	}
	
	else
	{
		return true;
	}
}

function checkcity(inputtext,alertMsg)
{
	if(inputtext.value == "0")
	{
		document.getElementById("head").innerText = alertMsg;
		inputtext.focus();return false;
	}
	
	else
	{
		return true;
	}
}

function checkprovince(inputtext,alertMsg)
{
	if(inputtext.value == "NULL")
	{
		document.getElementById("head").innerText = alertMsg;
		inputtext.focus();return false;
	}
	
	else
	{
		return true;
	}
}

function checkemp(inputtext,alertMsg)
{
	if(inputtext.value == "0")
	{
		document.getElementById("head").innerText = alertMsg;
		inputtext.focus();return false;
	}
	
	else
	{
		return true;
	}
}

function checkvId(inputtext,alertMsg)
{
	if(inputtext.value == "0")
	{
		document.getElementById("head").innerText = alertMsg;
		inputtext.focus();return false;
	}
	
	else
	{
		return true;
	}
}


function checkRegno(inputtext,alertMsg)
{
	if(inputtext.value == "0")
	{
		document.getElementById("head").innerText = alertMsg;
		inputtext.focus();return false;
	}
	
	else
	{
		return true;
	}
}

function checkvType(inputtext,alertMsg)
{
	if(inputtext.value == "NULL")
	{
		document.getElementById("head").innerText = alertMsg;
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


