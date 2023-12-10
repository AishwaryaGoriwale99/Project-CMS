// JavaScript Document

function payment_validate()

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
				   var payment_type=document.form1.payment_type.value.trim();
				   var amount=document.form1.amount.value.trim();
				   
				   
		     
				 
		       
			 if(payment_type=="-1")
			 {
				 alert("Enter payment type");
				 valid=false;
			 }
			  if(amount=="" || date!=date.match(dat2))
			 {
				 alert("Enter amount");
				 valid=false;
			 }
			
			
						   
								    
		return valid;						   
  }  
   	 	 	 	 	 	 	 	 	 	 	 	 	 	 			 	 	 	 	 	 	 	 	 	 	 	 	 	  
