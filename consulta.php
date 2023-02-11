<html>
  <head>
    <title>Consulta de dados</title>
  </head>
  <body>
   <?php

$servername = "fdb28.awardspace.net";
$database = "3655488_gab";
$username = "3655488_gab";
$password = "1234host";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);
// Check connection
if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
}

       $querySelect = $conn->query("select * from tb_teste1");
       while($registros = $querySelect->fetch_assoc()):
       $nome = $registros['nome'];
       $cpf = $registros['cpf'];
       $nick = $registros['nick'];
    
       echo "<tr>";
       echo "<td>$nome</td><td>$cpf</td><td>$nick</td>";
       echo"<td><a href='edit.php?cpf=$cpf'><i class='material-icons'>edit</i></a>";
       echo"</td><td><a href='delete.php?cpf=$cpf'><i class='material-icons'>delete</i></a></td>";
       echo "</tr>";
    
    
       endwhile;
   ?>
  </body>
</html>