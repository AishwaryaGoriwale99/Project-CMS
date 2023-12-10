// JavaScript Document

function ticket_validate()

   {      
      var   valid=true;
   
   
           var letters = /^[a-zA-Z ]+$/;  
		   var address=/^[a-zA-Z0-9.,;/ :]+$/;
		   var alphanum_space=/^[a-zA-Z-0-9\ ]+$/;
                  var alphanum=/^[a-zA-Z0-9]+$/; 
				  var j=/^[a-zA-Z0-9]+\[_]\[a-zA-Z0-9]+$/; 
				  var date=/^(0[1-9]|[12][0-9]|3[01])\.(0[1-9]|1[012])\.(19|20)\d\d$/
		          var number=/^[0-9]+$/;
				  var dat2=/^\d\d\.\d\d\.\d\d\d\d$/;
				   var path_type=/^(?:[\w]\:|\\)(\\[a-z_\-\s0-9\.]+)+\.(gpeg|gif|png|jpg)$/
				   var ticket_no=document.form1.ticket_no.value.trim();
				   var date=document.form1.date.value.trim();
				   var sector_from=document.form1.sector_from.value.trim();
				   var sector_to=document.form1.sector_to.value.trim();
				   var pnr_no=document.form1.pnr_no.value.trim();
				   var airline_name=document.form1.airline_name.value.trim();
				   var airline_no=document.form1.airline_no.value.trim();
				  
				   
		     
				 
		       
			 if(ticket_no=="" || ticket_no!=ticket_no.match(alphanum))
			 {
				 alert("invalid ticket No");
				 valid=false;
			 }
			  if(date=="" || date!=date.match(dat2))
			 {
				 alert("Invalid Date");
				 valid=false;
			 }
			 if(sector_from="" || sector_from!=sector_from.match(letters))
			 {
				 alert("Enter valid Sector From");
				 valid=false;
			 }
			  if(sector_to="" || sector_to!=sector_to.match(letters))
			 {
				 alert("Enter valid Sector To");
				 valid=false;
			 }
			 if(pnr_no="" || pnr_no!=pnr_no.match(alphanum))
			 {
				 alert("Enter valid PNR No");
				 valid=false;
			 }
			 if(airline_name="" || airline_name!=airline_name.match(alphanum))
			 {
				 alert("Enter valid air Line Name");
				 valid=false;
			 }
			 if(airline_no="" || airline_no!=airline_no.match(alphanum))
			 {
				 alert("Enter valid Airline No");
				 valid=false;
			 }
			
						   
								    
		return valid;						   
  }  
   	 	 	 	 	 	 	 	 	 	 	 	 	 	 			 	 	 	 	 	 	 	 	 	 	 	 	 	  
