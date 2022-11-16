<?php

   function Vista(){
      

    $dbhost = 'localhost';
    $dbuser = 'root';
    $dbpassword = '';
    $dbname = 'cep';

    $connection = mysqli_connect($dbhost, $dbuser, $dbpassword, $dbname) 
    or die('Erro ao se conectar com o servidor MYSQL');

    
    
    $query = "SELECT * FROM dados";

     $result = mysqli_query($connection, $query);
     echo "<tr>";
 while($dados = mysqli_fetch_array($result)){
    echo "<td>".$_SESSION['cep']   = $dados['cep']."</td>";
    echo "<td>".$_SESSION['rua']   = $dados['rua']."</td>";
    echo "<td>".$_SESSION['bairro']   = $dados['bairro']."</td>";
    echo "<td>".$_SESSION['cidade']   = $dados['cidade']."</td>";
    echo "<td>".$_SESSION['estado']   = $dados['estado']."</td>";
    echo "</tr>";
 }}
   

 function CidadeDesc(){
    session_start();

    $dbhost = 'localhost';
    $dbuser = 'root';
    $dbpassword = '';
    $dbname = 'cep';

    $connection = mysqli_connect($dbhost, $dbuser, $dbpassword, $dbname) 
    or die('Erro ao se conectar com o servidor MYSQL');

    
    
    $query = "SELECT * FROM dados ORDER BY cidade DESC";

     $result = mysqli_query($connection, $query);
     echo "<tr>";
 while($dados = mysqli_fetch_array($result)){
    echo "<td>".$_SESSION['cep']   = $dados['cep']."</td>";
    echo "<td>".$_SESSION['rua']   = $dados['rua']."</td>";
    echo "<td>".$_SESSION['bairro']   = $dados['bairro']."</td>";
    echo "<td>".$_SESSION['cidade']   = $dados['cidade']."</td>";
    echo "<td>".$_SESSION['estado']   = $dados['estado']."</td>";
    echo "</tr>";
 }}
 
 function CidadeAsc(){
    session_start();

    $dbhost = 'localhost';
    $dbuser = 'root';
    $dbpassword = '';
    $dbname = 'cep';

    $connection = mysqli_connect($dbhost, $dbuser, $dbpassword, $dbname) 
    or die('Erro ao se conectar com o servidor MYSQL');

    
    
     $query = "SELECT * FROM dados ORDER BY cidade ASC";

     $result = mysqli_query($connection, $query);
     echo "<tr>";
 while($dados = mysqli_fetch_array($result)){
    echo "<td>".$_SESSION['cep']   = $dados['cep']."</td>";
    echo "<td>".$_SESSION['rua']   = $dados['rua']."</td>";
    echo "<td>".$_SESSION['bairro']   = $dados['bairro']."</td>";
    echo "<td>".$_SESSION['cidade']   = $dados['cidade']."</td>";
    echo "<td>".$_SESSION['estado']   = $dados['estado']."</td>";
    echo "</tr>";
 }}

 function BairroDesc(){
    session_start();

    $dbhost = 'localhost';
    $dbuser = 'root';
    $dbpassword = '';
    $dbname = 'cep';

    $connection = mysqli_connect($dbhost, $dbuser, $dbpassword, $dbname) 
    or die('Erro ao se conectar com o servidor MYSQL');

    
    
     $query = "SELECT * FROM dados ORDER BY bairro DESC";

     $result = mysqli_query($connection, $query);
     echo "<tr>";
 while($dados = mysqli_fetch_array($result)){
    echo "<td>".$_SESSION['cep']   = $dados['cep']."</td>";
    echo "<td>".$_SESSION['rua']   = $dados['rua']."</td>";
    echo "<td>".$_SESSION['bairro']   = $dados['bairro']."</td>";
    echo "<td>".$_SESSION['cidade']   = $dados['cidade']."</td>";
    echo "<td>".$_SESSION['estado']   = $dados['estado']."</td>";
    echo "</tr>";
 }}

 function BairroAsc(){
    session_start();
    
    $dbhost = 'localhost';
    $dbuser = 'root';
    $dbpassword = '';
    $dbname = 'cep';

    $connection = mysqli_connect($dbhost, $dbuser, $dbpassword, $dbname) 
    or die('Erro ao se conectar com o servidor MYSQL');

    
    
     $query = "SELECT * FROM dados ORDER BY bairro ASC";

     $result = mysqli_query($connection, $query);
     echo "<tr>";
 while($dados = mysqli_fetch_array($result)){
    echo "<td>".$_SESSION['cep']   = $dados['cep']."</td>";
    echo "<td>".$_SESSION['rua']   = $dados['rua']."</td>";
    echo "<td>".$_SESSION['bairro']   = $dados['bairro']."</td>";
    echo "<td>".$_SESSION['cidade']   = $dados['cidade']."</td>";
    echo "<td>".$_SESSION['estado']   = $dados['estado']."</td>";
    echo "</tr>";
 }}

 function EstadoDesc(){
    session_start();

    $dbhost = 'localhost';
    $dbuser = 'root';
    $dbpassword = '';
    $dbname = 'cep';

    $connection = mysqli_connect($dbhost, $dbuser, $dbpassword, $dbname) 
    or die('Erro ao se conectar com o servidor MYSQL');



     $query = "SELECT * FROM dados ORDER BY bairro DESC";

     $result = mysqli_query($connection, $query);
     echo "<tr>";
 while($dados = mysqli_fetch_array($result)){
    echo "<td>".$_SESSION['cep']   = $dados['cep']."</td>";
    echo "<td>".$_SESSION['rua']   = $dados['rua']."</td>";
    echo "<td>".$_SESSION['bairro']   = $dados['bairro']."</td>";
    echo "<td>".$_SESSION['cidade']   = $dados['cidade']."</td>";
    echo "<td>".$_SESSION['estado']   = $dados['estado']."</td>";
    echo "</tr>";
 }}

 function EstadoAsc(){
    session_start();

    $dbhost = 'localhost';
    $dbuser = 'root';
    $dbpassword = '';
    $dbname = 'cep';

    $connection = mysqli_connect($dbhost, $dbuser, $dbpassword, $dbname) 
    or die('Erro ao se conectar com o servidor MYSQL');

    
    
     $query = "SELECT * FROM dados ORDER BY bairro ASC";

     $result = mysqli_query($connection, $query);
     echo "<tr>";
 while($dados = mysqli_fetch_array($result)){
    echo "<td>".$_SESSION['cep']   = $dados['cep']."</td>";
    echo "<td>".$_SESSION['rua']   = $dados['rua']."</td>";
    echo "<td>".$_SESSION['bairro']   = $dados['bairro']."</td>";
    echo "<td>".$_SESSION['cidade']   = $dados['cidade']."</td>";
    echo "<td>".$_SESSION['estado']   = $dados['estado']."</td>";
    echo "</tr>"; 
}}
?>