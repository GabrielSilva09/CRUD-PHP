<?php
$cpf = $_POST['cpf'];
$nome = $_POST['nome'];
$nick = $_POST['nick'];

// Connection
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
include('valida_cpf.php');

   // Verifica o CPF
   if ( !valida_cpf( $cpf ) ) {
      echo "CPF <span style='color:red'>" .$cpf. "</span> inválido.";
   }else{


         $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);
         $nick = filter_input(INPUT_POST, 'nick', FILTER_SANITIZE_SPECIAL_CHARS);
         $cpf = filter_input(INPUT_POST, 'cpf', FILTER_SANITIZE_NUMBER_INT);

         $queryUpdate =$conn->query("UPDATE tb_teste1 SET nome='$nome', nick='$nick' WHERE cpf='$cpf'");
         $affected_rows = mysqli_affected_rows($conn);
         if($affected_rows > 0):
         header("Location:../consultas.php");
         endif;}
    ?>

