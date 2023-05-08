<?php
    session_start();
    include_once('config.php');
    if((!isset($_SESSION['email']) == true) and (!isset($_SESSION['email'])== true)){
        unset($_SESSION['email']);
        unset($_SESSION['senha']);
        header('Location: login.php');
    }
    $logado = $_SESSION['email'];
    // if(!empty($_GET['search']))
    // {
    //     $data = $_GET['search'];
    //     $sql = "SELECT * FROM `login-contatos`.`contatos` WHERE id LIKE '%$data%' or nome LIKE '%$data%'  ORDER BY id DESC";
    // }
    // else
    // {
    //     $sql = "SELECT * FROM `login-contatos`.`contatos` ORDER BY id DESC";
    // }
    $sql = "SELECT * FROM `prova`.`todo` ORDER BY id DESC";

    $result = $conexao->query($sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>TODO</title>
    <style>
        body{
            background: linear-gradient(90deg, #f1191d, rgb(100, 55, 600));
            color: white;
            text-align: center;
        }
        .table-bg{
            background: rgba(0, 0, 0, 0.3);
            border-radius: 15px 15px 0 0;
        }

        .box-search{
            display: flex;
            justify-content: center;
            gap: .1%;
        }
        .novoTodo{
            background-color: rgb(43, 114, 196);
            border: none;
            padding: 15px;
            width: 50%;
            border-radius: 10px;
            color: white;
            font-size: 15px;
            text-decoration: none;
        }
        .novoTodo:hover{
            background-color: purple;
        }
        .nav-link1{
            text-decoration: none;
            color: white;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">TODO</a>
            
        </div>
        <div class="d-flex">
            <a href="sair.php" class="btn btn-danger me-5">Sair</a>
        </div>
    </nav>
    <br>
    <?php
        echo "<h1>Bem vindo <u>$logado</u>, abaixo estão as suas tarefas</h1>";
    ?>
    <br><br>

    
    <div class="container-fluid text-center mt-5">
    <!-- Criação dos links de navegação -->
    <ul class="nav justify-content-center">
        <li class="nav-item">
            <a class="nav-link1" href="sistemaHome.php">Home</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="sistemaActive.php">Active</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="sistemaDone.php">Done</a>
        </li>
    </ul>
    </div>
    
    <br><br>


    <div class="aa">
    <a href="novoTodo.php" class="novoTodo">New</a>    
    </div>
    
    <br><br>

    <div class="m-5">
        <table class="table text-white table-bg">
            <thead>
                <tr>
                    <th scope="col">Titulo</th>
                    <th scope="col">Subtitulo</th>
                    <th scope="col">Status</th>
                    <th scope="col">Ações</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    while($user_data = mysqli_fetch_assoc($result)) {
                        echo "<tr>";
                        echo "<td>".$user_data['titulo']."</td>";
                        echo "<td>".$user_data['subtitulo']."</td>";
                        echo "<td>".$user_data['Status']."</td>";

                        echo "<td>
                        <a class='btn btn-sm btn-primary' href='done.php?id=$user_data[id]' title='Concluir'>
                        <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-check-circle' viewBox='0 0 16 16'>
                        <path d='M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z'/>
                        <path d='M10.97 4.97a.235.235 0 0 0-.02.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-1.071-1.05z'/>
                        </svg>
                            </a> 
                            <a class='btn btn-sm btn-danger' href='delete.php?id=$user_data[id]' title='Deletar'>
                                <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-trash-fill' viewBox='0 0 16 16'>
                                    <path d='M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z'/>
                                </svg>
                            </a>
                            </td>";
                        echo "</tr>";
                    }
                    ?>
            </tbody>
        </table>
    </div>
</body>
</html>