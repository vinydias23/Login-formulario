<?php

use Symfony\Component\VarExporter\Internal\Values;

if(isset($_POST['submit'])) {
        /*
        print_r('Nome: ' . $_POST['nome']);
        print_r('<br>');
        print_r('Email: ' . $_POST['email']);
        print_r('<br>');
        print_r('Senha: ' . $_POST['senha']);
        print_r('<br>');
        print_r('Telefone: ' . $_POST['telefone']);
        print_r('<br>');
        print_r('Sexo: ' . $_POST['genero']);
        print_r('<br>');
        print_r('Data Nascimeto: ' . $_POST['data_nascimento']);
        print_r('<br>');
        print_r('Cidade: ' . $_POST['cidade']);
        print_r('<br>');
        print_r('Estado: ' . $_POST['estado']);
        print_r('<br>');
        print_r('Endereço: ' . $_POST['endereco']);
        */
        include_once('config.php');

        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $senha = $_POST['senha'];
        $telefone = $_POST['telefone'];
        $sexo = $_POST['genero'];
        $data_nasc = $_POST['data_nascimento'];
        $cidade = $_POST['cidade'];
        $estado = $_POST['estado'];
        $endereco = $_POST['endereco'];
        
        $result = mysqli_query($conexao, "INSERT INTO usuarios(nome, email, senha, telefone, sexo, data_nasc, cidade, estado, endereco) VALUES ('$nome', '$email', '$senha', '$telefone', '$sexo', '$data_nasc', '$cidade', '$estado', '$endereco')");
    }
?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estilo-form.css">
    <title>Formulário</title>
</head>
<body>
    <a href="home.php">Voltar</a>
    <div class="box">
        <form action="form.php" method="POST">
            <fieldset>
                <legend><b>Formulário de Clientes</b></legend>
                <br>
                <div class="inputBox">
                    <input type="text" name="nome" class="inputUser" id="nome" required>
                    <label for="nome" class="labelInput">Nome Completo</label>
                </div>
                <br>
                <div class="inputBox">
                    <input type="text" name="email" class="inputUser" id="email" required>
                    <label for="email" class="labelInput">Email</label>
                </div>
                <br>
                <div class="inputBox">
                    <input type="password" name="senha" class="inputUser" id="senha" required>
                    <label for="senha" class="labelInput">Senha</label>
                </div>
                <br>
                <div class="inputBox">
                    <input type="tel" name="telefone" class="inputUser" id="telefone" required>
                    <label for="telefone" class="labelInput">Telefone</label>
                </div>
                
                <p>Sexo:</p>
                <input type="radio" id="feminino" name="genero" value="feminino" required>
                <label for="feminino">Feminino</label>
                <br>
                <input type="radio" id="masculino" name="genero" value="masculino" required>
                <label for="masculino">Masculino</label>
                <br>
                <input type="radio" id="outro" name="genero" value="outro" required>
                <label for="outro">Outro</label>
                <br><br>
                
                    <label for="data_nascimento"><b>Data Nascimento</b></label>
                    <input type="date" name="data_nascimento" id="data_nascimento" required>
                <br>
                <br>

                <div class="inputBox">
                    <input type="text" name="cidade" class="inputUser" id="cidade" required>
                    <label for="cidade" class="labelInput">Cidade</label>
                </div>
                <br>
                <div class="inputBox">
                    <input type="text" name="estado" class="inputUser" id="estado" required>
                    <label for="estado" class="labelInput">Estado</label>
                </div>
                <br>
                <div class="inputBox">
                    <input type="text" name="endereco" class="inputUser" id="endereco" required>
                    <label for="endereco" class="labelInput">Endereço</label>
                </div>
                <br>
                <input type="submit" name="submit" id="submit">

            </fieldset>
        </form>
    </div>
</body>
</html>