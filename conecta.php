<?php
//Conexão com O banco de Dados
$servername = "localhost";
$username = "root";
$password ="admin";
$dbname = "livros";

// Cria a Conexão 
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Verifica Conexão
if (!$conn) {
    die("Conexão falhou: " . mysqli_connect_error());
    
}
echo 'Conectado com sucesso';
($link);

?>