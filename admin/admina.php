<?php 
            $sum=0;
			$conn= new mysqli("localhost","root","","defence");
			if($conn->connect_error)
            {
                echo "Error";
            }
            else
            {
                
                $sql = "SELECT * FROM donor"; 
                $result = $conn->query($sql);
                if($result->num_rows>0)

                {
                    while($row = $result->fetch_assoc()) 
                    {
                          $sum=$sum+$row["Contribution"];
                          
                    }
                 echo "<h2><center>Total Contribution is: ". $sum."</center></h1>";
                }
            }
			
//			$sql = "SELECT * FROM dummydata";

    ?>