<?php
    
 $con=mysqli_connect("localhost","root","","defence");
			
			$sql = "SELECT * FROM mfamily";
			$result = $con->query($sql);

			if ($result->num_rows > 0) 
			{
				// output data of each row
				while($row = $result->fetch_assoc()) 
				{
                    $c=0;
                    $d=0;
					$sno=$row["ServiceNo"];
                    $c=$row["children"];
                    $d=$row["employed"];
				    $prior=2*$c-$d;
                    if($prior>10){
                        $prior=10;}
                     $sqlw = "INSERT INTO priority (ServiceNo, PriorityNo ) VALUES ('$sno','$prior')";
                    $con->query($sqlw);
                    header('Location:admin.php');
                 
			
				}
			} 
       
?>