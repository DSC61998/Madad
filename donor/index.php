<?php
session_start();
include 'config.php';
$e = $_SESSION['email'];
?>
<html>
	<head><link href="css/bootstrap.min.css" rel="stylesheet">
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
		<h1><?php      
                $_SESSION['a']=$_SESSION['email'];
            $conn = new mysqli("localhost", "root", "" , "defence");
            $sql = "SELECT * from donor where Email='$e' ";
            
        $result = $conn->query($sql);

        if ($result->num_rows > 0) 
        {
            while($row = $result->fetch_assoc()) 
            {
                
                      echo "Welcome ".$row["FName"]."<br>";
            }
        }?> </h1><br>
		<div id="container">
			<form action="" method="POST">
			<p>
				<strong>CONTRIBUTION</strong><br><br>
				<input type="number" name="contribution" placeholder="Enter Contribution Amount" style="width: 14em" min="1" max="50000" required>
			</p>				
            <center>
			<input type="submit" value="Submit" name='submitt'>&nbsp;&nbsp;&nbsp;&nbsp;<a href="select.php" class="btn btn-primary">LOG OUT</a>
                
            </center>
			</form>
		</div>
        <?php
include 'config.php';
$em=$_SESSION['a'];
if (isset($_POST['submitt'])) 
{    $contribution = $_POST['contribution'];
    $conn = new mysqli("localhost", "root", "" , "defence");
// Check connection
    if ($conn->connect_error) 
    {
        die("Connection failed: " . $conn->connect_error);
    } 
    
    else
    {
        $sql = "SELECT * from donor ";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) 
        {
    // output data of each row
            while($row = $result->fetch_assoc()) 
            {
                if($em==$row["Email"])
                {
                       $contri=$row["Contribution"];
                       $fname=$row["FName"];
                    
                    $ab=$contri+$contribution;
                    echo "<h3>Thank You, ".$fname." For Rs. ".$contribution."<br> Your Total Contribution is Rs. ".$ab."</h3>";
                   $res ="UPDATE `donor` SET `Contribution` = '$ab' WHERE `Email` = '$em' ";
                    $divs=$conn->query($res);
                }
                  
                    
            }
        } 
        else 
        {
            echo " error";
        }

    }
}
//   $contribution = $_POST['contribution'];
//   $contr= mysqli_query($conn,"SELECT Contribution from 'donor' WHERE Email LIKE '$em' ") or die("Cannot connect to database!");
//   var_dump($contr);


//  $result = new mysqli_query("UPDATE `donor` SET `Contribution` = '$contri+$contribution' WHERE `teamid` = '$teamid' ") or die("Cannot connect to database!");
//    $exists = mysql_query('SELECT * from `donor` where `Email` = "'.$email.'" ');
//    $row = mysql_num_rows($exists);
//    $array = mysql_fetch_array($exists);
//    if ($row == 1) {
//        if ($array['Password'] == $pass) {
//            header('Location:index.php');
//        }else {
//                echo "<script>alert('Wrong Password');window.location='../login.php';</script>";
//    }
//    } else {
//                echo "<script>alert('Please Register First');window.location='../signup.php';</script>";
//    }
//} else {
//    header('location:../indexd.html');
//}
?>

    	</body>
</html>