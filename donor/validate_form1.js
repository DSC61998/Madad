function validate()
{ 
 if( document.c.nm.value == "" )
   {
     alert( "Please provide your First Name!" );
     document.c.nm.focus() ;
     return false;
}
	if( document.c.lm.value == "" )
   {
     alert( "Please provide your Last Name!" );
     document.c.lm.focus() ;
     return false;
} 
   if(document.c.servicenumber.value=='')
   {
	   alert('Please Enter ServiceNumber');
	   document.c.servicenumber.focus();
	   return false;
   }
 
    
}