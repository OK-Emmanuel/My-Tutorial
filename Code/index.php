<?php 
$connection = mysqli_connect("localhost", "root", "", "ksweb");
// if($connection){
//     echo "connected successfully";
// }
// else{
//     echo "Unable to connect";
// }
if (isset($_POST['signup'])){
    $username = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    // SQL statemensts must be preceded with ""
    $export = "INSERT INTO users(user_name, user_email, user_pas) 
               VALUES('$username', '$email', '$password')";
    
    // Write a query to check if user exists
    $check = "SELECT * FROM users WHERE user_name = '$username'";
    $check2 = mysqli_query($connection, $check);

    if(mysqli_num_rows($check2) > 0){
        // avoid existing user from registering again
        exit("User already exists");
    }else{
        // if user does not exist, create an account
    $action = mysqli_query($connection, $export);
        if($action){
            echo "<script>alert('You are successfully registered')</script>";
        }
    }
}

?>
<html>
    <title>Authentication Form</title>
    <head>
        <link rel="stylesheet" type="text/css" href="style.css" />
    </head>
    <body>
        <div class="container" id="container">
            <div class="form-container sign-up-container">
                <form action="<?= $_SERVER['PHP_SELF'] ?>" method="POST">
                    <h1>Create Account</h1>
                   <p style="font-weight: bold">Fill the form below</p>
                    <input type="text" name="name"  placeholder="Name" />
                    <input type="email"  name="email" placeholder="Email" />
                    <input type="password" name="password"  placeholder="Password" />
                    <p></p>
                    <button type="submit" name="signup">Sign up</button>
                </form>
            </div>

            <div class="form-container sign-in-container">
                <form action="dashboard.php" method="POST">
                    <h1>Sign in</h1>
                    
                    <p style="font-weight: bold">Provide your details</p>
                    <input type="email"  name="login_email" placeholder="Email" />
                    <input type="password" name="login_password" placeholder="Password" />
                    <p></p>
                    <button type="submit" name="signin">Sign In</button>
                </form>
            </div>
            <div class="overlay-container">
                <div class="overlay">
                    <div class="overlay-panel overlay-left">
                        <h1>Welcome Back</h1>
                        <p>To keep connected with us please login with your details</p>
                        <button class="ghost" id="signIn">Sign In</button>
                    </div>
                    <div class="overlay-panel overlay-right">
                        <h1>Hello Friend</h1>
                        <p>Enter your personal details and start your journey with us</p>
                        <button class="ghost" id="signUp">Sign Up</button>
                    </div>
                </div>

            </div>
        </div>
        <script src="app.js"></script>
    </body>
</html>