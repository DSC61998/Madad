<?php
session_start();
include 'config.php';
if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $pass = $_POST['pass'];
    $_SESSION['email'] = $email;

    $exists = mysql_query('SELECT * from `donor` where `Email` = "'.$email.'" ');
    $row = mysql_num_rows($exists);
    $array = mysql_fetch_array($exists);
    if ($row == 1) {
        if ($array['Password'] == $pass) {
            header('Location:index.php');
        }else {
                echo "<script>alert('Wrong Password');window.location='../login.php';</script>";
    }
    } else {
                echo "<script>alert('Please Register First');window.location='../signup.php';</script>";
    }
    $conn->close();
} else {
    header('location:../indexd.html');
    
}

?>