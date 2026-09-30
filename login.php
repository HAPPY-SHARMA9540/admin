 <?php
 session_start();
    include 'Common/connection.php';
    if($_SERVER['REQUEST_METHOD']== "POST"){
        $id=$_POST['id'];
        $pass=$_POST['pass'];
        
        $sql="SELECT * FROM user WHERE id=$id AND pass=$pass";
        $result = mysqli_query($connection,$sql);
         if($result && mysqli_num_rows($result)){
          $_SESSION['user_id']=$id;
          header("location:index.php");
          exit();
         }
          else{
            echo "wrong id and password";
          }
    }
 ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Elegant Login Form</title>
    <link rel="stylesheet" href="assets/CSS/login.css">
        <link rel="stylesheet" href="assets/CSS/ragister.css">
</head>

<body>
    <div class="background">
        <div class="login-container">
            <form class="login-form" action="" method="POST" id="loginForm">
                <h2>Welcome Back</h2>

                <div class="input-box">
                    <input type="text" id="userId" name="id" required>
                    <label for="userId">User ID</label>
                </div>

                <div class="input-box">
                    <input type="password" id="password" name="pass" required>
                    <label for="password">Password</label>
                </div>

                <button  type="submit" name="submit">Login</button>
                <p id="message"></p>

                     <button type="submit" name="submit" onclick="window.location.href='ragister.php'">Registration</button>
            </form>
        </div>
    </div>
           
    <script src="script.js"></script>
</body>

</html>