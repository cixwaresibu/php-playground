<?php
    include 'authenticate.php';
?>  

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <form  method="POST">
        <p style="text-align : center;">
            <label for="email">Email</label>
            <input type="text" name="email" id="email" placeholder="Enter your email address" value="<?php if($_SERVER['REQUEST_METHOD']=='POST') echo $email;?>"> <br>
            <span style="color:red">
                <?php 
                    if(isset($errors['email'])){
                        echo $errors['email'];
                    }
                ?>
            </span>
        </p>
        <br>
        <p style="text-align : center;">
            <label for="password">Password</label>
            <input type="password" name="password" id="password" placeholder="Enter your password">
            <br>
            <span style="color:red">
                <?php 
                    if(isset($errors['password'])){
                        echo $errors['password'];
                    }
                ?>
            </span>
        </p>
        <br>
        <p style="text-align : center;">
            <button type="submit">Log-In</button>
        </p>
    </form>
</body>
</html>