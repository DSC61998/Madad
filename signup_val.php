 <?php 
    {
        if($_POST)
        {
            $fname=$_POST["nm"];
            $lname=$_POST["lm"];
            $email=$_POST["em"];
            $pass=$_POST["pass"];
            $phno=$_POST['phno'];
            $rpass=$_POST['rpass'];
            
            $conn =new mysqli("localhost", "root", "","defence") or die("Could not connect to MySQL");

            if($rpass!=$pass)
            {
                echo "<script>alert('PASSWORD DOESNT MATCH');window.location='signup.php';</script>";
            }
            else
            {
            $sql = "INSERT INTO donor (Fname, Lname, Email, PhNo, Password) VALUES ('$fname','$lname','$email','$phno','$pass')";
            
            if ($conn->query($sql) === TRUE)
            {
                echo "<script>alert('USER CREATED! PROCEED WITH LOG IN');window.location='login.php';</script>";
            } 
            else
            {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
            
        }}
    }
    ?>