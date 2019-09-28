<html>
	<head>
      
		<style>
		  h1
		  {
		      text-align: center;
		      
		  }
		  #container
		  {
		      height: 80%;
		      width: 50%;
		      border: 2px solid white;
		      transform: translate(50%);
		      padding-left: 25px;
		      border: 2px solid aliceblue;
		  }
          #container1
		  {
		      width: 50%;
		      transform: translate(50%);
		      padding: 15px;
		      border: 2px solid greenyellow;
              background-color: greenyellow;
              color: white;   
		  }
         #container2
		  {
		      width: 50%;
		      transform: translate(50%);
		      padding: 15px;
		      border: 2px solid red;
              background-color: red;
              color: white;   
		  }
          #result
          {
              width: 50%;
		      transform: translate(50%);
		   }
            
          #result2
          {
              width: 50%;
		      border: 2px solid greenyellow;
		      transform: translate(50%);
		      padding: 15px;
              color: white;
              background-color: greenyellow;
		  }      
          #result3
          {
              width: 50%;
		      border: 2px solid red;
		      transform: translate(50%);
		      padding: 15px;
              color: white;
              background-color: red;
		   }
          input[type=submit]
            {
               width:30%;
               border:2px solid aliceblue;
               background-color: white;
               font-size: 18px;
            }
            input[type=submit]:focus
            {
               width:30%;
               border:2px solid green;
               background-color: green;
               color: white;
               font-size: 18px;
            }
            input[type=text],input[type=email],input[type=password]
            {
                border: 1px solid aliceblue;
                width: 60%;
                height: 5%;
            }
		</style>
	</head>
	<body>
		<h1> Donor Sign up </h1><br>
			<form action="signup_val.php" method="POST" name="a" onSubmit="return(validate());">
			<p>
				<strong>First Name</strong><br><br>
				<input type="text" name="nm" placeholder="Enter your first name" id="nm">
			</p>
			
			<p>
				<strong>Last Name</strong><br><br>
				<input type="text" name="lm" placeholder="Enter your last name" id="lm">
			</p>
			
			<p>
				<strong>Email</strong><br><br>
				<input type="email" name="em" placeholder="Enter your email" id="em">
			</p>
                <p>
				<strong>Phone Number</strong><br><br>
				<input type="number" name="phno" placeholder="Enter your phone number" id="phno" min="1111111111">
			</p>
			
			<p>
				<strong>Password</strong><br><br>
				<input type="password" name="pass" id="password" placeholder="Enter Password">
			</p>
			
			<p>
				<strong>Retype Password</strong><br><br>
				<input type="password" name="rpass" id="confirm_password" placeholder="Re Enter your Password">
                </p>
            <center>
			<input type="submit" value="Submit">
            </center>
			</form>
            <br>
            <a href=login.php><strong>Already Signed up? Proceed With Login</strong></a>
        
	  
        
   
	</body>
    <script type="text/javascript" src="validate.js"></script>
</html>
