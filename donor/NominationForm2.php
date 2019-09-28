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
		<h1> Fill to get help! </h1><br>
		<div id="container">
			<form action="" method="POST" name="myform">
			<h3> Family Details </h3>
			<p>
				<strong>Enter Number of CHILDREN in the family</strong><br><br>
				<input type="number" name="child" value="0" min="0" >

			</p>
			<p>
				<strong>Enter Number of EMPLOYED in the family</strong><br><br>
				<input type="number" name="employed" value="0" min="0" >

			</p>
	        <center>
			<input type="submit" value="submit" name="mart">
            </center>
			</form>
            <br>
		</div>
	</body>
				<?php
				if (isset($_POST['mart']))
                {   session_start();
                    $sno=$_SESSION['sno'];
                    echo $sno;
                    $child=$_POST['child'];
                    $employed=$_POST['employed'];
                        
            $conn =new mysqli("localhost", "root", "","defence") or die("Could not connect to MySQL");
            
                 $sql = "INSERT INTO mfamily (ServiceNo, children, employed) VALUES ('$sno','$child','$employed')";
            
            if ($conn->query($sql) === TRUE)
            {
                echo "<script>alert('DATA RECORDED SUCCESSFULLY!');window.location='../index.html';</script>";
            } 
            else
            {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
            
        }
                    
?>
</html>


