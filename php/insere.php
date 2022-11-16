<?php
session_start();

$dbhost = 'localhost';
$dbuser = 'root';
$dbpassword = '';
$dbname = 'cep';

$connection = mysqli_connect($dbhost, $dbuser, $dbpassword, $dbname) 
or die('Erro ao se conectar com o servidor MYSQL');


$cep   = $_POST['cep'];
$rua   = $_POST['endereco'];
$bairro   = $_POST['bairro'];
$cidade   = $_POST['cidade'];
$estado  = $_POST['estado'];


$insert = "INSERT INTO `dados`(`cep`, `rua`, `bairro`, `cidade`, `estado`) VALUES ('$cep','$rua','$bairro','$cidade','$estado');";
$insere = mysqli_query($connection, $insert);

header("location: resposta.php");

    ?>