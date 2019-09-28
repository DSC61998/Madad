<html>
	<head>
		<style>
		  h1
		  {
		      text-align: center;
		      
		  }
		  #container
		  {
		      height: 50%;
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
                height: 10%;
            }
		</style>
	</head>
	<body>
		<h1> Donor Login </h1><br>
		<div id="container">
			<form action="donor/login_validation.php" method="POST" name="b" onSubmit="return(validate());">
			<p>
				<strong>e-Mail</strong><br><br>
				<input type="text" name="email" placeholder="Enter registered Email" id="em">
			</p>
			
			
			
			<p>
				<strong>Password</strong><br><br>
				<input type="password" name="pass" placeholder="Enter Password" id="password">
			</p>
			
				
            <center>
			<input type="submit" value="Submit" name='submit'>
            </center>
			</form>
		</div>
        
    	</body>
     <script type="text/javascript" src="validate_login.js"></script>
</html>
