<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        body{
            font-family: Arial, Helvetica, sans-serif;
            background-image: linear-gradient(90deg, #f1191d, rgb(100, 55, 600));
        }
        div{
            background-color: rgba(0,0,0,0.6);
            position: absolute;
            top: 20%;
            left: 40%;
            transform: translate(-50% -50%);
            padding: 50px;
            border-radius: 10px;
            color: white;
        }
        input{
            padding: 10px;
            border: none;
            outline: none;
            font-size: 12px;
            border-radius: 10px;
        }
        .inputSubmit{
            background-color: rgb(148, 55, 235);
            border: none;
            width: 100%;
            padding: 10px;
            color: white;
            font-size: 12px;
        }
        .inputSubmit:hover{
            background-color: rgb(148, 55, 151);
            cursor: pointer;
        }
        .a{
            color: white;
            align-items: center;
        }
        .a:hover{
            color: purple;
        }
    </style>
</head>
<body>
    <div>
        <h1>Login</h1>
        <form action="testLogin.php" method="POST">
            <input  name="email" placeholder="E-mail" class="teste">
            <br><br>
            <input type="password" name="senha" placeholder="Senha" class="teste">
            <br><br>
            <input class="inputSubmit" type="submit" name="submit" value="Entrar">
        </form>
    </div>
</body>
</html>