$(document).ready(function(){ // This sets the opacity of the thumbs to fade down to 60% when the page loads

	$(".main_our_work li").hover(function(){
		$(this).fadeTo("slow", 0.7); // This sets the opacity to 100% on hover
	},function(){
		$(this).fadeTo("slow", 1); // This sets the opacity back to 60% on mouseout
	});


});
	
function switch_divs(show_div,hide_div){
	
	$('#'+hide_div).hide();
	$('#'+show_div).fadeIn();

}

function __in(divID){
	$(divID).fadeIn();
}

function __out(divID){
	$(divID).fadeOut();
	
}
							
function yourTurn(form,_url){	
	$("#msg").hide();
	$("#buttons").hide();
	$("#loading_ani").show(); 
	$.ajax({
		type: "POST",
		url: _url,
		data : $("#"+form).serialize(),
		success: function(html){
			var r = html.split("|");
			$("#buttons").show();
			$("#loading_ani").hide(); 
			
			if(r[0] == 1){
				$("#name").val('');
				$("#email").val('');
				$("#message").val('');	
				$("#phone").val('');
				$("#countryID").val('');
			}
			$("#security_code").val('');	
			jumpTo('#id_yourturn'); 
			$("#msg").show();
			$("#msg").html(r[1]);
			$("#q").html(r[2]);
		}
	});
}

function subscribe_foot(form,_url){	
	$("#newsletter_msg").hide();


	if($("#foot_name").val() == "Name" || $.trim($("#foot_name").val()) == ""){
		$("#newsletter_msg").show();
		$("#newsletter_msg").html("<p style='color:red;'>Name required</p>");
		return;
	}
	
	if($("#foot_email").val() == "E-mail" || $.trim($("#foot_email").val()) == ""){
		$("#newsletter_msg").show();
		$("#newsletter_msg").html("<p style='color:red;'>Email required</p>");
		return;
	}
	
	$("#newsletter_msg").hide();
	$.ajax({
		type: "POST",
		url: _url,
		data : $("#"+form).serialize(),
		success: function(html){
			var r = html.split("|");
			if(r[1] == 1){
				$("#div_get_yourself_posted").hide();
			}
			$("#newsletter_msg").show();
			$("#newsletter_msg").html(r[2]);
		}
	});
}

var current_div_section = '';
function mToggle(divID){
	if(current_div_section != divID){
		$(".toggle_section").slideUp();
	}
	$(divID).slideToggle('slow');
	current_div_section = divID;
}

function jumpTo(divID){
	var target = $(divID);
	target = target.length && target
	var targetOffset = target.offset().top;
	$("html,body").animate({scrollTop: targetOffset}, 1000);
}

function showImage(_url,imageID,portfolioid){
	_data = "imageID="+imageID + "&portfolioid="+portfolioid;
	$.ajax({
		type: "POST",
		url: _url,
		data: 	_data ,
		success: function(html){

			var r = html.split("|");
			var status = parseInt(r[0]);
			var img = r[1];
			var portfolioID = parseInt(r[2]);  
	
			if(status == 1){
				$("#desc_"+portfolioID).css("visibility", "hidden");
				$("#img_display_"+portfolioID).hide();
				$("#img_display_"+portfolioID).html(img);
				$("#img_display_"+portfolioID).show('slow');
			}
		}
	});
}

function _visible(divID){
	$(divID).css("visibility", "visible");
}

function _invisible(divID){
	$(divID).css("visibility", "hidden");
}

function _hint(obj,target_value,onblur){
	if(obj.value == target_value){
		obj.value = '';	
	}
	
	if(onblur == 1 && $.trim(obj.value) == ''){
		obj.value = target_value;
	}
}

function redirect(_url){
	window.location = _url;
}

function validate_rfp_form(form){
	var is_error = false;
	if($.trim(form.name.value) == ''){
		$("#em_name").show();
		is_error = true;
	}
	
	if($.trim(form.email.value) == ''){
		$("#em_email").show();
		is_error = true;
	}else if(!validate_email(form.email.value)){
		$("#em_email").show();
		("#em_email").html("Invalid email address");
		is_error = true;
	}
	
	if($.trim(form.phone.value) == ''){
		$("#em_phone").show();
		is_error = true;
	}
	
	
	if($.trim(form.countryID.value) == ''){
		$("#em_countryID").show();
		is_error = true;
	}
	
	if(is_error){
		$("#jmp_rfp_form").show();
		jumpTo('#rfp_jump');
		return false;
	}
	$("#jmp_rfp_form").hide();
	return true;
}

                            
function validate_form()
{    
    var txt_name = jQuery.trim( $("#txt_name").val() );
    var txt_email = jQuery.trim( $("#txt_email").val() );
    var txt_message = jQuery.trim( $("#txt_message").val() );

    var error_str = "";
    
    if(txt_name == '')
    {
        error_str += "<li>Name is required</li>";
    }
    
    if(txt_email == '')
    {
        error_str += "<li>Email Address is required</li>";
    }
    else if(is_email(txt_email) == false)
    {
         error_str += "<li>Invalid Email Address</li>";
    }
    
    if(txt_message == '')
    {
        error_str += "<li>Message is required</li>";
    }
    
    if(error_str != '')
    {
        $("#span_error").html("<ul>" + error_str + "</ul>");
        return false;
    }
    return true;
}


function is_email(str) {

        var at="@"
        var dot="."
        var lat=str.indexOf(at)
        var lstr=str.length
        var ldot=str.indexOf(dot)
        if (str.indexOf(at)==-1){
           
           return false
        }

        if (str.indexOf(at)==-1 || str.indexOf(at)==0 || str.indexOf(at)==lstr){ 
           return false
        }

        if (str.indexOf(dot)==-1 || str.indexOf(dot)==0 || str.indexOf(dot)==lstr){
            
            return false
        }

         if (str.indexOf(at,(lat+1))!=-1){
            
            return false
         }

         if (str.substring(lat-1,lat)==dot || str.substring(lat+1,lat+2)==dot){
            
            return false
         }

         if (str.indexOf(dot,(lat+2))==-1){
            
            return false
         }
        
         if (str.indexOf(" ")!=-1){
            
            return false
         }

          return true                    
    }
    