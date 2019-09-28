<html>
	<head><link href="css/bootstrap.min.css" rel="stylesheet">
		<style>
            .btn-change1{
                height: 50px;
                width: 100px;
                background: lightseagreen;
                margin: 20px;
                float: left;
                border: 0px;
                color: #fff;
                box-shadow: 0 0 1px #ccc;
                -webkit-transition-duration: 0.5s;
                -webkit-box-shadow: 0px 0px 0 0 #31708f inset , 0px 0px 0 0 #31708f inset;
            }
            .btn-change1:hover{
                -webkit-box-shadow: 50px 0px 0 0 #31708f inset , -50px 0px 0 0 #31708f inset;
}
            
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
		<h1> ADMIN Login </h1><br>
		<div id="container">
				<p>
				<strong>USERNAME</strong><br><br>
                    <form method="post" action="logina_validation.php">
				<input type="text" name="email" placeholder="Enter Username" required>
			</p>
			
			
			
			<p>
				<strong>Password</strong><br><br>
				<input type="password" name="pass" placeholder="Enter Password" required>
			</p>
			
				
            <center>
			<input type="submit" value="LOG IN" name="contribute" class="btn btn-primary">
            </center>
            </form>
        </div>
        
    	</body>
</html>
