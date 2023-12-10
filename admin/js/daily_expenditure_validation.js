// JavaScript Document
function daily_expenditure_validate()

   {      
      var   valid=true;
   
   
           var letters = /^[a-zA-Z\ ]+$/;  
		   var address=/^[a-zA-Z0-9.,;/ :]+$/;
		   var alphanum_space=/^[a-zA-Z-0-9\ ]+$/;
                  var alphanum=/^[a-zA-Z0-9]+$/; 
				  var j=/^[a-zA-Z0-9]+\[_]\[a-zA-Z0-9]+$/; 
				  var date=/^(0[1-9]|[12][0-9]|3[01])\.(0[1-9]|1[012])\.(19|20)\d\d$/
		          var number=/^[0-9]+$/;
				  var dat2=/^\d\d\.\d\d\.\d\d\d\d$/;
				   var path_type=/^(?:[\w]\:|\\)(\\[a-z_\-\s0-9\.]+)+\.(gpeg|gif|png|jpg)$/
				  var voucher_no=document.form1.voucher_no.value.trim();
				  var amount=document.form1.amount.value.trim();
				  var description=document.form1.description.value.trim();
				  var title=document.form1.title.value.trim();
				   
				  
				   
				   
				   
		     
			 if(voucher_no=="" || voucher!=voucher.match(number))
			 {
				 alert("Enter voucher no");
				 valid=false;
			 }
			 else if(title="" || title.match(letters)==null)
			 {
				 alert("Enter Title");
				 valid=false;
			 }
			else if(description=="" || description.match(letters)==null)
			 {
				 alert("Enter Description");
				 valid=false;
			 }
			 else
			 {
			 if(amount=="" || amount.match(number==null))
			 {
				 alert("Enter Amount");
				 valid=false;
			 }
			 }
			 
		       		   
								    
		return valid;						   
  }  