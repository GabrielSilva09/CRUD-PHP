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

$cpf = filter_input(INPUT_GET, 'cpf',);
$queryDelete = $conn->query("delete from tb_teste1 where cpf='$cpf'");

if(mysqli_affected_rows($conn)>0):
    header("Location:../consultas.php");
endif;
?>

 