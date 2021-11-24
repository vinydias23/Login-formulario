<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
            background-image: linear-gradient(to right, yellow, green);
            text-align: center;
        }
        .box {
            color: white;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background-color: rgba(0, 0, 0, 0.0);
            padding: 20px;
            border-radius: 15px;
            width: 15%;
        }
        a {
            text-decoration: none;
            color: white;
            border: 3px solid yellow;
            border-radius: 15px;
            padding: 15px;
        }
        a:hover {
            background-color: yellow;
            color: green;
        }
    </style>
    <title>Home</title>
</head>
<body>
    <h1>Se Inscreva no Canal</h1>
    <h2>Vinicius Dias Favari</h2>
    <div class="box">
        <a href="login.php">Login</a>
        <a href="form.php">Cadastre-se</a>
    </div>
</body>
</html>