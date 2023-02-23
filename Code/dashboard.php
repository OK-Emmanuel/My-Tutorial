<?php 
$connection = mysqli_connect("localhost", "root", "", "ksweb");
if(isset($_POST['signin'])){
    $mail = $_POST['login_email'];
    $password = $_POST['login_password'];

    // Check if User Exists
    $exist = "SELECT * FROM users WHERE user_email = '$mail' AND user_pas = '$password'";
    $checkExist = mysqli_query($connection, $exist); 
    if(mysqli_num_rows($checkExist) > 0 ){
        echo "<h1> Welcome back User</h1>";
    } else{
        echo "Your Account is not found. <a href='index.php'>Go back</a>";
    }


  
}


?>
<h1>HOmepage</h1>