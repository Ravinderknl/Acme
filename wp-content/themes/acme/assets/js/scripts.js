
jQuery(document).ready(function(e) {
jQuery('#step1_btn').click(function(e){
var error_name='';
var error_email = '';
  var error_password = '';
  var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
  var password=$.trim($('#pass').val());
  if($.trim($('#name').val()).length == 0)
  {
   error_name = 'Name is required';
   $('#error_name').text(error_name);
   $('#name').addClass('has-error');
  }
  else
  {
   error_name = '';
   $('#error_name').text(error_name);
   $('#name').removeClass('has-error');
  }
  if($.trim($('#email').val()).length == 0)
  {
   error_email = 'Email is required';
   $('#error_email').text(error_email);
   $('#email').addClass('has-error');
  }
  else
  {
   if (!filter.test($('#email').val()))
   {
    error_email = 'Invalid Email';
    $('#error_email').text(error_email);
    $('#email').addClass('has-error');
   }
   else
   {
    error_email = '';
    $('#error_email').text(error_email);
    $('#email').removeClass('has-error');
   }
  }
  
  if(password.length == 0)
  {
   error_password = 'Password is required';
   $('#error_password').text(error_password);
   $('#pass').addClass('has-error');
  }
  else if(password.length < 6)
  	{
  	error_password = 'Password is too short';
   $('#error_password').text(error_password);
	$('#pass').addClass('has-error');
  	}
  	else if (password.search(/\d/) == -1) {
       error_password = 'Password required number';
   $('#error_password').text(error_password);
	$('#pass').addClass('has-error');
    } else if (password.search(/[a-zA-Z]/) == -1) {
       error_password = 'Password required character';
   $('#error_password').text(error_password);
	$('#pass').addClass('has-error');
    }
  	else 
  	{
   error_password = '';
   $('#error_password').text(error_password);
   $('#pass').removeClass('has-error');
  }
  if(error_name != '' || error_email != '' || error_password != '')
  {
   return false;
  }
  else
  {
jQuery('.step1').addClass('step-inactive');
jQuery('.step2').removeClass('step-inactive');
  }
 });

jQuery('#step2_btn').click(function(e){
var error_tname='';
var role = $( "#team_role option:selected" ).text();
var tsize = $( "#team_size option:selected" ).text();
if($.trim($('#tname').val()).length == 0)
  {
   error_tname = 'Name is required';
   $('#error_tname').text(error_tname);
   $('#tname').addClass('has-error');
  }
  else
  {
   error_tname = '';
   $('#error_tname').text(error_tname);
   $('#tname').removeClass('has-error');
  }
if(error_tname != '')
  {
   return false;
  }
  else
  {
 var admin_url = jQuery('#admin_url').val();
var nameval = $.trim($('#name').val());
var emailval = $.trim($('#email').val());
var passwordval=$.trim($('#pass').val());
var tnameval = $.trim($('#tname').val());
var role = $( "#team_role option:selected" ).text();
var tsize = $( "#team_size option:selected" ).text();
jQuery.ajax({
type:'post',
url:admin_url,
data:{
action:'register_data',name:nameval,email:emailval,pass:passwordval,tname:tnameval,teamrole:role,teamsize:tsize  
},
success:function(response)
{
alert (response);

},
error:function(result)
{
alert(result);
}
});
} 

});
});


