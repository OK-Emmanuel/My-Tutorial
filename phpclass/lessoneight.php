<!-- SUPERGLOBALS
GET
POST
SERVER
SESSION
COOKIES
REQUEST
GLOBAL
FILES
ENV
-->
<?php 
$connection = mysqli_connect("localhost", "root", "", "kschat");
if($connection){
    echo "Database connected successfully";
}




if(isset($_POST['create'])){
    $name = $_POST['username'];
    $password = $_POST['password'];
    $cpassword = $_POST['confirm_password'];
    $email = $_POST['email'];
    $dob = $_POST['dob'];

//     // basic form processing
//    if($password !== $cpassword){
//     echo "the two passwords do not match.";
//    }
    $checkemail = "SELECT * FROM users WHERE user_name = '$name'  ";
    $checkemail2 = mysqli_query($connection, $checkemail);
    if ($checkemail2){
        echo "This username has been taken";
    }



    // echo "$name $password $cpassword $email $dob";
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration PAge</title>
    <link rel="stylesheet" href="../code/bootstrap/css/bootstrap.css">
    <style>
        
    </style>
</head>
<body>
    <div class="container">
        <div class="card">
    <form action="" method="POST">
        <p>Username</p>
        <input type="text" name="username" id="">
    
        
        <p>Password</p>
        <input type="password" name="password" id="">
        
        <p>Confirm Password</p>
        <input type="password" name="confirm_password" id="">

        <p>Email Address</p>
        <input type="email" name="email" id="">

        <p>Date of Birth</p>
        <input type="date" name="dob" id="">

        <p><input type="submit" name="create" value="Create Account"></p>
    </form>
</div>    
</body>
</html>