<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="admin.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>Admin | Login</title>
</head>
<body>
    <div class="box">
        <div class="container">
            <div class="top-header">
                <!-- <span>Have an account?</span> -->
                <header>Admin Login</header>
            </div>

            <form action="" method="post">
            <div class="input-field">
                <input type="text" class="input" name="admin_username" placeholder="Username" required>
                <i class="bx bx-user"></i>
            </div>
            <div class="input-field">
                <input type="password" class="input" name="password" placeholder="Password" required>
                <i class="bx bx-lock-alt"></i>
            </div>
            <div class="input-field">
                <input type="submit" name="login" class="submit" value="Login">
            </div>

            <div class="bottom">
                <div class="left">
                    <!-- <input type="checkbox"  id="check">
                    <label for="check"> Remember Me</label> -->
                </div>
                <div class="right">
                    <!-- <label><a href="#">Forgot password?</a></label> -->
                </div>
            </div>
            </form>
        </div>
    </div>
</body>
</html>

<?php 
    include("../include/connect.php"); 
    
    // @session_start();
    // get data from input fields
    if(isset($_POST["login"])){
    $username = $_POST["admin_username"];
    $password = $_POST["password"];
    
    // fetch data from database
    $select_query = "SELECT * FROM `admin_login` WHERE admin_username = '$username'";
    $result = mysqli_query($con, $select_query);
    $row_count = mysqli_num_rows($result);

    
    if($result && $row_data = mysqli_fetch_assoc($result)){
        // Password from database
        $password_verify = $row_data['admin_password'];

        // Verify the entered password 
        if($password === $password_verify){
            echo "<script>alert('You are logged in')</script>";
            // $_SESSION['admin_username'] = $row_data['admin_username'];
            echo "<script>window.open('admin_page.php','_self')</script>";
            
        } else {
            echo "<script>alert('Invalid credentials')</script>";
        }
    }   else {
          echo "<script>alert('Invalid credentials')</script>";
    }
}

?>