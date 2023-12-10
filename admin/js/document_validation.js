// JavaScript Document
function document_validate()

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
				   var document_type=document.form1.document_type.value.trim();
				   var document1=document.form1.document1.value.trim();
				   
		     
			 if(document_type=="" || document_type!=document_type.match(letters))
			 {
				 alert("Enter Document type");
				 valid=false;
			 }
			 if(document1=="" || document1!=document1.match(path_type))
			 {
				 alert("Enter Document ");
				 valid=false;
			 }
			  
			
						   
								    
		return valid;						   
  }  