<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estilo-login.css">
    <style>
        .inputSubmit {
            background-color: dodgerblue;
            border: none;
            padding: 15px;
            width: 100%;
            border-radius: 10px;
            color: white;
            font-size: 15px;
            cursor: pointer;
        }
        .inputSubmit:hover {
            background-color: deepskyblue;
        }
    </style>
    <title>Login</title>
</head>

<body>
    <a href="home.php">Voltar</a>
    <div>
        <h1>Login</h1>
        <form action="testeLogin.php" method="POST">
            <input type="text" name="email" class="email" id="email" placeholder="Email">
            <br><br>
            <input type="password" name="senha" class="senha" id="senha" placeholder="Senha">
            <br><br>
            <input type="submit" nome="submit" class="inputSubmit" value="Enviar">
        </form>
    </div>
</body>

</html>