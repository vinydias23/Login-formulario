<?php
$dbHost = 'Localhost';
$dbUsername = 'root';
$dbPassword = '';
$dbName =  'formulario-vinicius';

$conexao = new mysqli($dbHost,$dbUsername,$dbPassword,$dbName);

/*
if($conexao->connect_errno)
{
    echo "ERROR";
} 
else
{
    echo "Conexão efetuada com Sucesso!";
}
*/
?>