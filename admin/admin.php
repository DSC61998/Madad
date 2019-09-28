<html>
	<head>
        <link href="css/bootstrap.min.css" rel="stylesheet">
		<style>
		  h1
		  {
		      text-align: center;
		      
		  }
		  #container
		  {
		      height: 40%;
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
              width: 60%;
		      border: 1px solid aliceblue;
		      transform: translate(40%);
		      padding: 15px;
              background-color:yellow;
              
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
                width: 20%;
                height: 30px;
            }
			input[type=number],input[type=select]
            {
                border: 1px solid aliceblue;
                width: 20%;
                height: 30px;
            }
        </style>

	</head>
	<body>
		<h1>HELLO ADMIN </h1><br>
		<div id="container">
			<h3> CALCULATE TOTAL CONTRIBUTION BY PRESSING THE BUTTON </h3>
<center>
    <a href=admina.php class="btn btn-primary">CALCULATE!</a>
    <br><br>
    <a href="priorityalgo.php" class="btn btn-primary">PRIORITY GENERATOR</a>
    &nbsp;&nbsp;&nbsp;&nbsp;
    <a href="distribution.php" class="btn btn-primary">DISTRIBUTE FUNDS</a>
     &nbsp;&nbsp;&nbsp;&nbsp;
    <a href="../index.html" class="btn btn-primary">LOG OUT</a>

			</center>
            <br>
		</div>
	</body>
				
</html>


