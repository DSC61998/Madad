function validate()
{ 
 var email = document.b.em.value;
  atpos = email.indexOf("@");
  dotpos = email.lastIndexOf(".");
 if (email == "" || atpos < 1 || ( dotpos - atpos < 2 )) 
 {
     alert("Please enter correct email ID")
     document.b.em.focus() ;
     return false;
 }
  
   if(document.b.password.value=='')
   {
	   alert('Please Enter Password');
	   document.b.password.focus();
	   return false;
   }
 
    
}