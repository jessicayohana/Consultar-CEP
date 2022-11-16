<!DOCTYPE html> 
<html> 
<head> 
    <meta charset="utf-8">
    <link rel="stylesheet" href="../css/style2.css">
    <title></title> 
</head> 
<body> 
<form method="POST">
<?php


include('../filtros/filtros.php');

$dbhost = 'localhost';
$dbuser = 'root';
$dbpassword = '';
$dbname = 'cep';

$connection = mysqli_connect($dbhost, $dbuser, $dbpassword, $dbname) 
or die('Erro ao se conectar com o servidor MYSQL');

  echo "<table>";
  echo "<td>CEP<br></td>";
  echo "<td>Endereço<br></td>";
  
  echo '<td>Bairro   
  <button type="submit" name="BairroAsc">A-Z</button>
  <button type="submit" name="BairroDesc">Z-A</button><br></td>';
  
  echo '<td>Cidade   
  <button type="submit" name="CidadeAsc">A-Z</button>
  <button type="submit" name="CidadeDesc">Z-A</button><br></td>';
  
  echo '<td>Estado   
  <button type="submit" name="EstadoAsc">A-Z</button>
  <button type="submit" name="EstadoDesc">Z-A</button><br></td>';

        
    

      if(isset($_POST['BairroAsc'])) {
         BairroAsc();
       }
       elseif(isset($_POST['BairroDesc'])) {
         BairroDesc();
       }
       elseif(isset($_POST['CidadeAsc'])) {
         CidadeAsc();
       }
       elseif(isset($_POST['CidadeDesc'])) {
       CidadeDesc();
       }
       elseif(isset($_POST['EstadoAsc'])) {
        EstadoAsc();
       }
       elseif(isset($_POST['EstadoDesc'])) {
        echo EstadoDesc();
       }else{
        Vista();
       }
      
        

      echo "</table>"; 
  ?>
</form>
<footer class="footer">
        Jéssica Yohana Otto - 2022
 </footer>
</body> 
</html>