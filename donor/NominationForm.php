<html>
	<head>
		<style>
		  h1
		  {
		      text-align: center;
		      
		  }
		  #container
		  {
		      height: 63%;
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
		<h1> Fill to get Help! </h1><br>
		<div id="container">
			<form action="" method="POST" name="c" onSubmit="return(validate());">
			<h3> Personal Information </h3>
			<p>
				<strong>First Name</strong><br><br>
				<input type="text" name="nm" placeholder="Enter martyr's first name" id="nm">
			</p>
			
			<p>
				<strong>Last Name</strong><br><br>
				<input type="text" name="lm" placeholder="Enter martyr's last name" id="lm">
			</p>
			
			<p>
				<strong>Service Number</strong><br><br>
				<input type="text" name="servicenumber" placeholder="Enter service number" id="servicenumber">
			</p>
	        <center>
			<input type="submit" value="Submit">
            </center>
			</form>
            <br>
		</div>
		</body>
       <script type="text/javascript" src="validate_form1.js"></script>
</html>
        
    <?php 
		if($_POST)
		{   session_start();
            $_SESSION['sno']=$_POST['servicenumber'];
			$fname=$_POST["nm"];
			$lname=$_POST["lm"];
			$srnum=$_POST["servicenumber"];
			$con=mysqli_connect("localhost","root","","defence");
			
			if (mysqli_connect_errno())
			{
				echo "Failed to connect to MySQL: " . mysqli_connect_error();
			}

			$sql = "SELECT * FROM dummydata";
			$result = $con->query($sql);

			if ($result->num_rows > 0) 
			{
				// output data of each row
				while($row = $result->fetch_assoc()) 
				{
					if($row["ServiceNo"]==$srnum && $row["Fname"]==$fname && $row["Lname"]==$lname)
					{
						header('location:NominationForm2.php');
					}
                    else
			{
				 echo "<script>alert('INVALID ACCESS');window.location='NominationForm.php';</script>";
			}
				}
			} 
			
		}
    ?>

