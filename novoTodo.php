<?php
    session_start();
    include_once('config.php');
    if((!isset($_SESSION['email']) == true) and (!isset($_SESSION['email'])== true)){
        unset($_SESSION['email']);
        unset($_SESSION['senha']);
        header('Location: login.php');}
    if(isset($_POST['submit'])){

        

        $titulo = $_POST['titulo'];
        $subtitulo = $_POST['subtitulo'];

        $result = mysqli_query($conexao, "INSERT INTO `prova`.`todo` (`titulo`,`subtitulo`)
         VALUES ('$titulo', '$subtitulo')");

        header('Location: sistemaHome.php');
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Novo Contato</title>
    <style>
        body{
            font-family: Arial, Helvetica, sans-serif;
            background-image: linear-gradient(90deg, #f1191d, rgb(100, 55, 600));
        }
        .formulario{
            color: white;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%,-50%);
            background-color: rgba(0,0, 0, 0.4);
            padding: 20px;
            border-radius: 10px;
        }
        legend{
            border: 5px solid purple;
            text-align: center;
            padding: 20px;
            border-radius: 10px;
            background-color: rgba(0,0,0,0.1);
            color: pink;
        }
        .inputBox{
            position: relative;
        }
        .inputUser{
            background: none;
            border: 5px solid purple;
            border-radius: 10px;
            outline: none;
            color: rgb(241, 177, 177);
            font-size: 15px;
            width: 85%;
            letter-spacing: 2px;
            padding: 10px;
        }
        .labelinput{
            position: absolute;
            top: 15px;
            left: 75px;
            pointer-events: none;
            transition: .5s;
            color: rgb(175, 228, 205);
        }
        .inputUser:focus ~ .labelinput,
        .inputUser:valid ~ .labelinput{
            top: -20px;
            color: pink;
            font-size: larger;
        }
        #submit{
            background-image: linear-gradient(to right, rgb(0,92,192), rgb(90,20,220));
            width: 100%;
            border: none;
            padding: 15px;
            color: rgb(175, 228, 205);
            font-size: 15px;
            cursor: pointer;
            border-radius: 10px;
        }
        #submit:hover{
            background-image: linear-gradient(to right, rgb(0,80,172), rgb(175, 228, 205));
            color: pink;
        }
        .aa{
            background-image: linear-gradient(to right, rgb(0,92,192), rgb(90,20,220));
            width: 100%;
            border: none;
            padding: 15px;
            color: white;
            font-size: 15px;
            cursor: pointer;
            border-radius: 10px;
        }
    </style>
</head>

<body>
    <a href="sistemaHome.php" class="aa">Voltar</a>
    <div class="formulario">
        <form action="novoTodo.php" method="POST">
            <legend><b>New todo</b></legend>
                <br><br>
                <div class="inputBox">
                    <input type="text" name = 'titulo' id = 'titulo' class="inputUser" required>
                    <label for="titulo" class="labelinput">Titulo</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name = 'subtitulo' id = 'subtitulo' class="inputUser" data-mask="(00) 0000-0000" data-mask-selectonfocus="true" required>
                    <label for="subtitulo" class="labelinput">Subtitulo</label>
                </div>
                <br><br>
                <input type="submit" name="submit" id="submit" value="Cadastrar">
        </form>
    </div>
    
</body>
</html>