<?php
//print_r($_REQUEST);
if(isset($_POST['submit']) && !empty($_POST['email']) && !empty($_POST['senha']))
{
    //Acessa
    include_once('config.php');
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    print_r('Email: ' . $email);
    print_r('Senha: ' . $senha);
}
else
{
    //Não Acessa
    header('Location: login.php');
}


?>
