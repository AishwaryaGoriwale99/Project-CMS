// JavaScript Document
function dependent_validate()

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
				   var rel=document.form1.relationship.value.trim();
				   var dob=document.form1.date_of_birth_of_dep.value.trim();
				   var sex=document.form1.sex_of_dep.value.trim();
				   var name=document.form1.full_name_of_dep.value.trim();
				  
				   
				   
				   
		     
			 if(rel=="" || rel!=rel.match(letters))
			 {
				 alert("Enter Relationship");
				 valid=false;
			 }
		       
			 
			  if(dob=="" || dob!=dob.match(dat2))
			 {
				 alert("Enter Date Of Birth");
				 valid=false;
			 }
			 if(sex=="-1")
			 {
				 alert("Enter Sex of Dependent");
				 valid=false;
			 }
			  if(name=="" || name!=name.match(letters))
			 {
				 alert("Enter Name");
				 valid=false;
			 }
			
			
						   
								    
		return valid;						   
  }  