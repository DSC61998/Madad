function validate()
{ 
   if( document.a.nm.value == "" )
   {
     alert( "Please provide your First Name!" );
     document.a.nm.focus() ;
     return false;
}
	if( document.a.lm.value == "" )
   {
     alert( "Please provide your Last Name!" );
     document.a.lm.focus() ;
     return false;
} 
 var email = document.a.em.value;
  atpos = email.indexOf("@");
  dotpos = email.lastIndexOf(".");
 if (email == "" || atpos < 1 || ( dotpos - atpos < 2 )) 
 {
     alert("Please enter correct email ID");
     document.a.em.focus() ;
     return false;
 }
   if( document.a.phno.value == "" ||
           isNaN( document.a.phno.value) ||
           document.a.phno.value.length != 10 )
   {
     alert( "Please provide Your PHONE Number" );
     document.a.phno.focus() ;
     return false;
   }
    if( document.a.password.value == "" )
        {
            alert("Enter Password");
	   document.a.password.focus();
	   return false;
        }
   if(document.a.password.value!=document.a.confirm_password.value)
   {
	   alert("Password dont match");
	   document.a.password.focus();
	   return false;
   }
 
    
}