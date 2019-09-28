<?php

	$first_name=$_POST['first_name'];
	$last_name=$_POST['last_name'];
	$company_name=$_POST['company_name'];
	$address=$_POST['address'];
	$city=$_POST['city'];
	$state=$_POST['state'];
	$age=$_POST['age'];
	$email=$_POST['email'];
	$password=$_POST['password'];
    $category=$_POST['category'];

	$host = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbname = "scrapcatalyst";
    //create connection
    $conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);
    if (mysqli_connect_error()) {
     die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
    } else {
     $SELECT = "SELECT email From sign_up Where email = ? Limit 1";
     $INSERT = "INSERT Into sign_up (f_name,l_name,company_name,address,city,state,age,email,password,category) values(?, ?, ?, ?, ?, ?,?,?,?,?)";




//Prepare statement
     $stmt = $conn->prepare($SELECT);
     $stmt->bind_param("s", $email);
     $stmt->execute();
     $stmt->bind_result($email);
     $stmt->store_result();
     $rnum = $stmt->num_rows;
     if ($rnum==0) {
      $stmt->close();
      $stmt = $conn->prepare($INSERT);
      $stmt->bind_param("ssssssisss", $first_name, $last_name, $company_name, $address, $city, $state, $age ,$email, $password, $category);
      $stmt->execute();
      echo "New record inserted sucessfully";
     } else {
      echo "Someone already register using this email";
     }
     $stmt->close();
     $conn->close();
    }
?>





     