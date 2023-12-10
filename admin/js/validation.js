//customer validation



function validate()

   {      
      var   valid=true;
   
   
           var letters = /^[a-zA-Z ]+$/;  
		   var address=/^[a-zA-Z0-9.,;/ :]+$/;
		   var alphanum_space=/^[a-zA-Z-0-9\ ]+$/;
                  var alphanum=/^[a-zA-Z0-9]+$/; 
				  
		          var number=/^[0-9]+$/;
				  var dat2=/^\d\d\/\d\d\/\d\d\d\d$/;
				var fileName = document.form1.userfile.value;
                var ext = fileName.substring(fileName.lastIndexOf('.') + 1);//give the extention of file;
				  var name=document.form1.full_name.value.toUpperCase();
		          var pob=document.form1.place_of_birth.value.trim().toUpperCase();
		          var hadd=document.form1.home_address.value;
			      var son_of=document.form1.son_of.value.trim().toUpperCase();
		          var pn=document.form1.passport_no.value.trim().toUpperCase();
			      var pois=document.form1.place_of_issue.value.trim().toUpperCase();
			      var cname=document.form1.carriers_name.value.trim().toUpperCase();
			      var prv_n=document.form1.previous_nationality.value.trim().toUpperCase();
			      var dest=document.form1.destination.value.trim();
			      var pr_n=document.form1.present_nationality.value.trim().toUpperCase();
			      var relgn=document.form1.religion.value.trim().toUpperCase();
				  var profession=document.form1.profession.value.trim();
			      var sect=document.form1.sect.value.trim().toUpperCase();
				  var hadd=document.form1.home_address.value.trim().toUpperCase();
				  var tn=document.form1.telephone_no .value.trim().toUpperCase();
				  var rel=document.form1.relationship.value.toUpperCase();
				  var dosik=document.form1.duration_of_stay_in_kindom.value.trim().toUpperCase();
				  var visa_no=document.form1.visa_no.value.trim().toUpperCase();
				  var dop=document.form1.date_of_passport.value.trim();
				  var status=document.form1.status.value;
				  var sex=document.form1.sex.value.trim();
				  var mst=document.form1.marital_status.value.trim();
				  var qlf=document.form1.qualification.value;
				  var pot=document.form1.purpose_of_travel.value.trim();
				  var pexp=document.form1.date_of_passport_expiry.value.trim();
				  var doa=document.form1.date_of_arrival.value.trim();
				  var dod=document.form1.date_of_departure.value.trim();
		          var mop=document.form1.mode_of_payment.value.trim();
				  var dob=document.form1.date_of_birth.value.trim();
			
		
            
		   if(ext != "gif" && ext !="GIF" && ext !="JPEG" && ext !="jpeg" && ext!="jpg" && ext !="JPG")
                           {
	                   alert("Upload Gif or Jpg images only");
					   
                        valid=false;
                            } 
			 else if(name=="" || name.match(letters)==null )
			       {
				
				alert("Name is not valid");
				valid=false;
			
			       }
   
			else if(son_of=="" || son_of.match(letters)==null )
			       {
				alert("Father Name Is Not Valid");
				valid=false;
			       }
			else if(status=="-1")
			       {
				alert("enter status");
				valid=false;
			        }
			else if(dob=""|| dob!=dob.match(dat2))
				{
					alert("enter valid Date Of Birth");
					valid=false;
				}
				else if(pob=="" || pob!=pob.match(letters) )
			       {
				alert("Place Of Birth Is Not Valid");
				valid=false;
			      }
				else if(prv_n=="" || prv_n!=prv_n.match(letters) )
			       {
				alert("Please Enter a Valid Name For Prevois Nationality");
				valid=false;
			          }
			
			else if(pr_n=="" || pr_n!=pr_n.match(letters) )
			{
				alert("Please Enter a Valid Name For Present  Nationality");
				valid=false;
			}
			else if(sex=="-1")
				{
					alert("enter gender");
					valid=false;
				}
			else if(mst=="-1")
				{
					alert("enter valid marital status");
					valid=false;
				}
				else if(sect=="" || sect!=sect.match(letters) )
			{
				alert("Please Enter Your Sect");
				valid=false;
			}
			else if(relgn=="" || relgn!=relgn.match(letters) )
			{
				alert("Please Enter Your Relegion");
				valid=false;
			}
			else if(pois=="" || pois!=pois.match(letters) )
			{
				alert("Place Of Issue Is Not Valid");
				valid=false;
			}
			else if(qlf=="-1")
				{
					alert("enter qualification");
					valid=false;
				}
				else if(profession=="" || profession.match(letters)==null)
				{
					alert("enter profession");
					valid=false;
				}
				
				else if(hadd=="" || hadd!=hadd.match(address) )
			{
				alert("Please Enter Home Address");
				valid=false;
			}
			else if(tn=="" || tn!=tn.match(number) )
			{
				alert("Enter Valid Phone Number");
				valid=false;
			}
			else if(pot=="-1")
				{
					alert("enter purpose of travel");
					valid=false;
				}
				else if(dop=""|| dop!=dop.match(dat2))
				{
					alert("enter valid date for passport");
					valid=false;
				}
				
			else if(pn!=pn.match(alphanum))
			{
				alert("Passport Number Is Not Valid");
				valid=false;
			}
			else if(pexp=""|| pexp!=pexp.match(dat2))
				{
					alert("enter valid date for passport expiry");
					valid=false;
				}
				else if(dosik=="" || dosik!=dosik.match(alphanum_space) )
			{
				alert("Please Enter Duration Of Stay In Kindom");
				valid=false;
			}
			else if(doa=""|| doa!=doa.match(dat2))
				{
					alert("enter valid date for arrival");
					valid=false;
				}
				else if(dod=""|| dod!=dod.match(dat2))
				{
					alert("enter valid date for departure");
					valid=false;
				}
					else if( mop!=mop.match(letters) )
			{
				alert("Enter Valid Mode of Payment");
				valid=false;
			}
			else if( rel!=rel.match(letters) )//relationship may be null
			{
				alert("Enter Valid Name For Relationship");
				valid=false;
			}
			else if(dest=="" || dest!=dest.match(letters) )
			{
				alert("Destination Name Is Not Valid");
				valid=false;
			}
			
			else if(cname=="" || cname!=cname.match(letters) )
			{
				alert("Carrier's Name Is Not Valid");
				valid=false;
			}
			else 
			
			{
			if(visa_no=="" || visa_no!=visa_no.match(alphanum) )
			{
				alert("Please Enter Valid Visa Number");
				valid=false;
			}
			}
						   
								    
		return valid;						   
  }  
   	 
	 
	 
	 
	 //customer edit form validation
	 
	function validate1()

   {      
      var   valid=true;
   
   
           var letters = /^[a-zA-Z ]+$/;  
		   var address=/^[a-zA-Z0-9.,;/ :]+$/;
		   var alphanum_space=/^[a-zA-Z-0-9\ ]+$/;
                  var alphanum=/^[a-zA-Z0-9]+$/; 
				  
		          var number=/^[0-9]+$/;
				  var dat2=/^\d\d\/\d\d\/\d\d\d\d$/;
				  var path_type=/^(?:[\w]\:|\\)(\\[a-z_\-\s0-9\.]+)+\.(gpeg|gif|png|jpg)$/
		         
				  var name=document.form1.full_name.value.trim();
		          var pob=document.form1.place_of_birth.value.trim().toUpperCase();
		          var hadd=document.form1.home_address.value;
			      var son_of=document.form1.son_of.value.trim().toUpperCase();
		          var pn=document.form1.passport_no.value.trim().toUpperCase();
			      var pois=document.form1.place_of_issue.value.trim().toUpperCase();
			      var cname=document.form1.carriers_name.value.trim().toUpperCase();
			      var prv_n=document.form1.previous_nationality.value.trim().toUpperCase();
			      var dest=document.form1.destination.value.trim();
			      var pr_n=document.form1.present_nationality.value.trim().toUpperCase();
			      var relgn=document.form1.religion.value.trim().toUpperCase();
			      var sect=document.form1.sect.value.trim().toUpperCase();
				  var profession=document.form1.profession.value.trim();
				  var hadd=document.form1.home_address.value.trim().toUpperCase();
				  var tn=document.form1.telephone_no .value.trim().toUpperCase();
				  var rel=document.form1.relationship.value.toUpperCase();
				  var dosik=document.form1.duration_of_stay_in_kindom.value.trim().toUpperCase();
				  var visa_no=document.form1.visa_no.value.trim().toUpperCase();
				  var dop=document.form1.date_of_passport.value.trim();
				  var status=document.form1.status.value;
				  var sex=document.form1.sex.value.trim();
				  var mst=document.form1.marital_status.value.trim();
				  var qlf=document.form1.qualification.value;
				  var pot=document.form1.purpose_of_travel.value.trim();
				  var pexp=document.form1.date_of_passport_expiry.value.trim();
				  var doa=document.form1.date_of_arrival.value.trim();
				  var dod=document.form1.date_of_departure.value.trim();
		          var mop=document.form1.mode_of_payment.value.trim();
				  var dob=document.form1.date_of_birth.value.trim();
			
		
            
		      
			  if(name=="" || name.match(letters)==null )
			       {
				
				alert("Name is not valid");
				valid=false;
			
			       }
   
			else if(son_of=="" || son_of.match(letters)==null )
			       {
				alert("Father Name Is Not Valid");
				valid=false;
			       }
			else if(status=="-1")
			       {
				alert("enter status");
				valid=false;
			        }
			else if(dob=""|| dob!=dob.match(dat2))
				{
					alert("enter valid Date Of Birth");
					valid=false;
				}
				else if(pob=="" || pob!=pob.match(letters) )
			       {
				alert("Place Of Birth Is Not Valid");
				valid=false;
			      }
				else if(prv_n=="" || prv_n!=prv_n.match(letters) )
			       {
				alert("Please Enter a Valid Name For Prevois Nationality");
				valid=false;
			          }
			
			else if(pr_n=="" || pr_n!=pr_n.match(letters) )
			{
				alert("Please Enter a Valid Name For Present  Nationality");
				valid=false;
			}
			else if(sex=="-1")
				{
					alert("enter gender");
					valid=false;
				}
			else if(mst=="-1")
				{
					alert("enter valid marital status");
					valid=false;
				}
				else if(sect=="" || sect!=sect.match(letters) )
			{
				alert("Please Enter Your Sect");
				valid=false;
			}
			else if(relgn=="" || relgn!=relgn.match(letters) )
			{
				alert("Please Enter Your Relegion");
				valid=false;
			}
			else if(pois=="" || pois!=pois.match(letters) )
			{
				alert("Place Of Issue Is Not Valid");
				valid=false;
			}
			else if(qlf=="-1")
				{
					alert("enter qualification");
					valid=false;
				}
				
				else if(profession=="" || profession.match(letters)==null)
				{
					alert("enter profession");
					valid=false;
				}
				
				else if(hadd=="" || hadd!=hadd.match(address) )
			{
				alert("Please Enter Home Address");
				valid=false;
			}
			else if(tn=="" || tn!=tn.match(number) )
			{
				alert("Enter Valid Phone Number");
				valid=false;
			}
			else if(pot=="-1")
				{
					alert("enter purpose of travel");
					valid=false;
				}
				else if(dop=""|| dop!=dop.match(dat2))
				{
					alert("enter valid date for passport");
					valid=false;
				}
				
			else if(pn!=pn.match(alphanum))
			{
				alert("Passport Number Is Not Valid");
				valid=false;
			}
			else if(pexp=""|| pexp!=pexp.match(dat2))
				{
					alert("enter valid date for passport expiry");
					valid=false;
				}
				else if(dosik=="" || dosik!=dosik.match(alphanum_space) )
			{
				alert("Please Enter Duration Of Stay In Kindom");
				valid=false;
			}
			else if(doa=""|| doa!=doa.match(dat2))
				{
					alert("enter valid date for arrival");
					valid=false;
				}
				else if(dod=""|| dod!=dod.match(dat2))
				{
					alert("enter valid date for departure");
					valid=false;
				}
					else if( mop!=mop.match(letters) )
			{
				alert("Enter Valid Mode of Payment");
				valid=false;
			}
			else if( rel!=rel.match(letters) )//relationship may be null
			{
				alert("Enter Valid Name For Relationship");
				valid=false;
			}
			else if(dest=="" || dest!=dest.match(letters) )
			{
				alert("Destination Name Is Not Valid");
				valid=false;
			}
			
			else if(cname=="" || cname!=cname.match(letters) )
			{
				alert("Carrier's Name Is Not Valid");
				valid=false;
			}
			else 
			
			{
			if(visa_no=="" || visa_no!=visa_no.match(alphanum) )
			{
				alert("Please Enter Valid Visa Number");
				valid=false;
			}
			}
						   
								    
		return valid;						   
  }  
   	 
  
  
  
  
  //file validation
  function file_validate()

   {      
      var   valid=true;
   
   
           var letters = /^[a-zA-Z ]+$/;  
		   var address=/^[a-zA-Z0-9.,;/ :]+$/;
		   var alphanum_space=/^[a-zA-Z-0-9\ ]+$/;
                  var alphanum=/^[a-zA-Z0-9]+$/; 
				  var j=/^[a-zA-Z0-9]+\[_]\[a-zA-Z0-9]+$/; 
				  var date=/^(0[1-9]|[12][0-9]|3[01])\.(0[1-9]|1[012])\.(19|20)\d\d$/
		          var number=/^[0-9]+$/;
				   var dat2=/^\d\d\/\d\d\/\d\d\d\d$/;
				   var path_type=/^(?:[\w]\:|\\)(\\[a-z_\-\s0-9\.]+)+\.(gpeg|gif|png|jpg)$/
				   var fileName = document.form1.userfile.value;
                   var ext = fileName.substring(fileName.lastIndexOf('.') + 1);
                  if(ext != "gif" && ext !="GIF" && ext !="JPEG" && ext !="jpeg" && ext!="jpg" && ext !="JPG")
                                 {
	                            alert("Upload Gif or Jpg images only");
                             valid=false;
                             } 
				   
		     
			 
			 

				return valid;
  }  
  
  
  
  //ticket validation
  
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
				   var dat2=/^\d\d\/\d\d\/\d\d\d\d$/;
				   var path_type=/^(?:[\w]\:|\\)(\\[a-z_\-\s0-9\.]+)+\.(gpeg|gif|png|jpg)$/
				   var ticket_no=document.form1.ticket_no.value.trim();
				   var date=document.form1.date.value.trim();
				   var sector_from=document.form1.sector_from.value.trim();
				   var sector_to=document.form1.sector_to.value.trim();
				   var pnr_no=document.form1.pnr_no.value.trim();
				   
				   var airline_no=document.form1.airline_no.value.trim();
				  
				   
		     
				 
		       
			 if(ticket_no=="" || ticket_no!=ticket_no.match(alphanum))
			 {
				 alert("invalid ticket No");
				 valid=false;
			 }
			 else if(date=="" || date!=date.match(dat2))
			 {
				 alert("Invalid Date");
				 valid=false;
			 }
			 else if(sector_from="" || sector_from!=sector_from.match(letters))
			 {
				 alert("Enter valid Sector From");
				 valid=false;
			 }
			  else if(sector_to="" || sector_to!=sector_to.match(letters))
			 {
				 alert("Enter valid Sector To");
				 valid=false;
			 }
			else if(pnr_no="" || pnr_no!=pnr_no.match(alphanum))
			 {
				 alert("Enter valid PNR No");
				 valid=false;
			 }
			else if(airline_name="" || airline_name!=airline_name.match(alphanum))
			 {
				 alert("Enter valid air Line Name");
				 valid=false;
			 }
			 else
			 {
			 if(airline_no="" || airline_no!=airline_no.match(alphanum))
			 {
				 alert("Enter valid Airline No");
				 valid=false;
			 }
			 }
			
						   
								    
		return valid;						   
  }  
   	 	 	 	 	 	 	 	 	 	 	 	 	 	 			 	 	 	 	 	 	 	 	 	 	 	 	 	  




//payment validation




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
				   var dat2=/^\d\d\/\d\d\/\d\d\d\d$/;
				   var path_type=/^(?:[\w]\:|\\)(\\[a-z_\-\s0-9\.]+)+\.(gpeg|gif|png|jpg)$/
				   var payment_type=document.form1.payment_type.value.trim();
				   var amount=document.form1.amount.value.trim();
				   
				   
		     
				 
		       
			 if(payment_type=="-1")
			 {
				 alert("Enter payment type");
				 valid=false;
			 }
			  else
			  {
			 if (amount=="" || amount!=amount.match(number))
			 {
				 alert("Enter amount");
				 valid=false;
			 }
			  }
			
			
						   
								    
		return valid;						   
  }  
   	 	 	 	 	 	 	 	 	 	 	 	 	 	 			 	 	 	 	 	 	 	 	 	 	 	 	 	  

//document validation



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
				   var dat2=/^\d\d\/\d\d\/\d\d\d\d$/;
				   var path_type=/^(?:[\w]\:|\\)(\\[a-z_\-\s0-9\.]+)+\.(gpeg|gif|png|jpg)$/
				   var document_type=document.form1.document_type.value.trim();
				   var fileName = document.form1.document1.value;
                var ext = fileName.substring(fileName.lastIndexOf('.') + 1);
				if(document_type=="" || document_type!=document_type.match(letters))
				{
				 alert("enter document type");
				 valid=false;
				}
                    else
					{
					 if(ext != "gif" && ext !="GIF" && ext !="JPEG" && ext !="jpeg" && ext!="jpg" && ext !="JPG")
                                    {
	                                alert("Upload Gif or Jpg images only");
                                   valid=false;
                                      } 
					}
						   
								    
		return valid;						   
  }  
  
  
  
  //dependent validation
  
  
  
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
				   var dat2=/^\d\d\/\d\d\/\d\d\d\d$/;
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
		       
			 
			  else if(dob=="" || dob!=dob.match(dat2))
			 {
				 alert("Enter Date Of Birth");
				 valid=false;
			 }
			else if(sex=="-1")
			 {
				 alert("Enter Sex of Dependent");
				 valid=false;
			 }
			 else
			 {
			  if(name=="" || name!=name.match(letters))
			 {
				 alert("Enter Name");
				 valid=false;
			 }
			 }
			
			
						   
								    
		return valid;						   
  }  
  
  
  // daily expenditure validation
  
  
  
  function daily()

   {      
      var   valid=true;
   
   
           var letters = /^[a-zA-Z ]+$/;  
		   var address=/^[a-zA-Z0-9.,;/ :]+$/;
		   var alphanum_space=/^[a-zA-Z-0-9\ ]+$/;
                  var alphanum=/^[a-zA-Z0-9]+$/; 
				  var j=/^[a-zA-Z0-9]+\[_]\[a-zA-Z0-9]+$/; 
				  var date=/^(0[1-9]|[12][0-9]|3[01])\.(0[1-9]|1[012])\.(19|20)\d\d$/
		          var number=/^[0-9]+$/;
				   var dat2=/^\d\d\/\d\d\/\d\d\d\d$/;
				   var path_type=/^(?:[\w]\:|\\)(\\[a-z_\-\s0-9\.]+)+\.(gpeg|gif|png|jpg)$/
				   var voucher_no=document.form1.voucher_no.value.trim();
				   var amount=document.form1.amount.value.trim();
				   var description=document.form1.description.value.trim();
				   var title=document.form1.title.value.trim();
				   
				   
		     
				 
		       
			 if (voucher_no=="" || voucher_no!=voucher_no.match(number))
			 {
				 alert("Enter voucher no");
				 valid=false;
			 }
			else if (title=="" || title!=title.match(alphanum_space))
			 {
				 alert("Enter Title");
				 valid=false;
			 }
			 else if (description=="" || description!=description.match(alphanum_space))
			 {
				 alert("Enter description");
				 valid=false;
			 }
			  else
			  {
			 if (amount=="" || amount!=amount.match(number))
			 {
				 alert("Enter amount");
				 valid=false;
			 }
			  }
			
			
						   
								    
		return valid;						   
  }  
  
  
  
  
  
  
  
  
  
  
  
  
  
  