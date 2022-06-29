<?php
$num= 0 ;
session_start();
if($_SERVER["REQUEST_METHOD"] == "POST"){
include '_dbconnect.php'; 
    $email = $_POST['username'];
    $pass =  $_POST['password'];
    $_SESSION["email"] = $email;
    $sql = "SELECT * FROM `admin_account` WHERE admin_email = '$email' and admin_pass = '$pass' ";
    
    $result = mysqli_query($con,$sql);
    $num = mysqli_num_rows($result);

    if($num == 1){
        header("location: Admin_home.php");
    }else{
        $num = 2;
    }
    $con->close();
}
?>

<html>
<head>
    <title>MedHelp</title>
    <link rel="stylesheet" type="text/css" href="Admin_login.css">
</head>
<body>
    <img src = "img/Logo.png" class = "Logo">
    <div class = "form">
    <img src = "img/profile.png" class = "profile">
    <h1>Login Admin</h1>
        <?php
            if($num == 2){
                echo "<p align='center'> <font color=red  size='3pt'>Wrong Password!</font> </p>";
            } 
        ?>
        <form action="/MedHelp/Admin_login.php" method="POST"> 
        <p>Email ID</p>
        <input type="text" name="username" placeholder="Enter Email ID">
        <p>Password</p>
        <input type="password" name="password" placeholder="Enter Password">
        <input type="submit" name="login" value ="Login">
        <input type="submit" name="admin" value ="Login as User" onClick="javascript: form.action='login.php';">
       
        <p>Don't have an Account? <ul><li><a href="Admin_Reg.php">Sign up here</a></li></ul></p>
        </form>
    </div>
    
</body>
</html>