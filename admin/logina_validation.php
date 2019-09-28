<?php

if (isset($_POST['contribute']))
{
    $email=$_POST['email'];
    $pass=$_POST['pass'];
    if($email=='a@admin'&&$pass=='Poiuytrewq@098')
    {
        echo "<script>alert('LOGIN SUCCESSFUL!');window.location='admin.php';</script>";
    }
    else
    {
       echo "<script>alert('Wrong Credentials');window.location='index.php';</script>";
    }
}
?>