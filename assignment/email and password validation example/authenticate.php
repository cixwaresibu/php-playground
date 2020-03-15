<?php
    include 'user.php';
    if($_SERVER['REQUEST_METHOD']=='POST') {
            $email = $_POST['email'];
            $password = $_POST['password'];
            $errors=[];
            $regex = '/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/';

            //email verification
            if(strlen($email)<1){
                $errors['email'] = 'email field is required';
            }
            else if(!preg_match($regex, $email)){
                $errors['email']='email is of invalid format';
            }
            if(strlen($password)<1){
                $errors['password']='password field is required';
            }
            else if($email!==$user['email'] && $password!==$user['password']){
                $errors['password']='the credentials doesnot match';
                $errors['email']='the credentials doesnot match';
            }
            else if ($email===$user['email'] && $password!==$user['password']){
                $errors['password']='password doesnot match';
            }
            else if($email===$user['email']&& $password===$user['password']){
                header('location:welcome.php');
                session_start();
                $_SESSION['email']=$email;
            }
            
        }

        function gotoLogin(){
            header('location:index.php');
            session_destroy();
        }

?>