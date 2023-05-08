<?php
    session_start();
        if(isset($_POST['submit']) && !empty($_POST['email']) && !empty($_POST['senha'])){
            include_once('config.php');
            $email = $_POST['email'];
            $senha = $_POST['senha'];

            if($email != 'admin' && $senha != 'admin'){
                unset($_SESSION['email']);
                unset($_SESSION['senha']);
                header('Location: login.php');
                echo 'erro';
            }
            else
            {
                $_SESSION['email'] = $email;
                $_SESSION['senha'] = $senha;
                header('Location: sistemaHome.php');
            }
            
        }
        else{
            header('Location: login.php');
            echo 'erro';
        }


?>