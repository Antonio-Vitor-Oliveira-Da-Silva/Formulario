<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Anthony Vitor" />
    <meta name="description" content="HTML/CSS" />
    <title>Tela de Login | Anthony Vitor</title>
    <style>
        body{
            font-family: 'Monoserrat';
            background-image: linear-gradient(45deg, cyan, yellow);
        }
        div{
            background-color: rgba(0, 0, 0, 0.9);
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            padding: 80px;
            border-radius: 15px;
            color: whitesmoke;
        }
        input{
            padding: 15px;
            border: none;
            outline: none;
            font-size: 15px;
        }
        .inputSubmit{
            background-color: deepskyblue;
            border: none;
            padding: 15px;
            width: 100%;
            border-radius: 10px;
            color: whitesmoke;
            font-size: 15px;
        }
        .inputSubmit:hover{
            background-color: deepskyblue;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <a href="home.php">Voltar</a>
    <div>
    <h1>Login</h1>
    <form action="testLogin.php" method="POST">
    <input type="text" name="email" placeholder="Nome">
    <br><br>
    <input type="password" name="senha" placeholder="Senha">
    <br><br>
    <input class="inputSubmit" type="submit" name="submit" value="Enviar">
    </div>
    </form>
</body>
</html>