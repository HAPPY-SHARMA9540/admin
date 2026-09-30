  <?php include 'Common/connection.php';
     
       if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id   = $_POST['id'];
    $name = $_POST['name'];
    $num  = $_POST['num'];
    $pass = $_POST['pass'];


    $stmt = $connection->prepare("INSERT INTO user (id, name, phone, pass) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssss",$id, $name, $num, $pass);

    if ($stmt->execute()) {
        header("location: login.php");
    } else {
        echo "Failed: " . $stmt->error;
    }

    $stmt->close();
    $connection->close();
}

  ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Elegant Login Form</title>
    <link rel="stylesheet" href="assets/CSS/login.css">
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
                    <input type="name" id="name" name="name" required>
                    <label for="name">Name</label>
                </div>

                 <div class="input-box">
                    <input type="number" id="num" name="num" required>
                    <label for="number">Number</label>
                </div>

                <div class="input-box">
                    <input type="password" id="password" name="pass" required>
                    <label for="password">Password</label>
                </div>

                
                <button type="submit" name="submit">Submit</button>
                <p id="message"></p>
            </form>
        </div>
    </div>
    
    <script src="script.js"></script>
</body>

<div class="input-box">
   <input type="Birthday" id="password" name="pass" required>
   <label for="password">Password</label>
</div>
</html>