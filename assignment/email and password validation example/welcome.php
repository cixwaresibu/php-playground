<?php
    include 'authenticate.php';

    if($_SERVER['REQUEST_METHOD']=='POST') {
        gotoLogin();
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>
        welcome mr. 
        <?php 
            session_start();
            echo $_SESSION['email'].",";
        ?>
        you are now ready for next step.
    </h1>
    <form action="" method="POST">
        <button type="submit">Log Out</button>
    </form>
</body>
</html>