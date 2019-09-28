
<?php 

// $con=mysqli_connect("localhost","root","","defence");
//			
//			$sql = "SELECT * FROM priority";
//			$result = $con->query($sql);
//
//			if ($result->num_rows > 0) 
//			{
//				// output data of each row
//				while($row = $result->fetch_assoc()) 
//				{
//                    $c=0;
//                    $d=0;
//					$sno=$row["ServiceNo"];
//                    $c=$row["children"];
//                    $d=$row["employed"];
//				    $prior=2*$c-$d;
//                    if($prior>10){
//                        $prior=10;}
//                     $sqlw = "INSERT INTO priority (ServiceNo, PriorityNo ) VALUES ('$sno','$prior')";
//                    $con->query($sqlw);
//                 
//			
//				}
//			} 
//       
            $sum=0;
            $cat1=0;
            $cat2=0;
            $cat3=0; 
            $amt1=0;
$amt2=0;
$amt3=0;
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
			$sqle = "SELECT * FROM priority";
			$result = $conn->query($sqle);

			if ($result->num_rows > 0) 
			{
				// output data of each row
				while($row = $result->fetch_assoc()) 
				{
                    $c=0;
					$sno=$row["ServiceNo"];
                    $c=$row["PriorityNo"];
                    if($c>=8){
                        $cat1++;
                    }
                    else if($c>=4 && $c<8){
                        $cat2++;
                    }
                    else{
                        $cat3++;
                    }
                  
                }
            }
            if($cat1>0)
            {
                $amt1=(0.5*$sum)/$cat1;
            }
            else 
            {
                echo "Cat1 doesnot exist";
            }
            if($cat2>0)
            {
                $amt2=(0.3*$sum)/$cat2;
            }
            else 
            {
                echo "Cat2 doesnot exist";
            }
            if($cat3>0)            
            {
                $amt3=(0.2*$sum)/$cat3;
            }
            else 
            {
                echo "Cat3 doesnot exist";
            }
//var_dump($amt1);
  //          var_dump($amt2);
    //        var_dump($amt3);
                    $sqlw = "UPDATE priority set Amt='$amt1' WHERE PriorityNo >= '8'";
                    $conn->query($sqlw);
                    $sqle = "UPDATE priority set Amt='$amt2' WHERE PriorityNo>=4 and PriorityNo<8";
                    $conn->query($sqle);
                    $sqlr = "UPDATE priority set Amt='$amt3' WHERE PriorityNo<4";
                    $conn->query($sqlr);
//			$sql = "SELECT * FROM dummydata";
                     header('Location:admin.php');

    ?>