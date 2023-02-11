<html>
        <head>
                <link href="mainstyle.css" rel="stylesheet" type="text/css">
        </head>
        <body>
                <div id = "header">
                        <a href="index.html">Página Inicial</a>
                        <a href="consultas.php">Consulta de Cadastro</a>
                </div>
                <div id = "body">
                        <?php

                                $nome = $_POST ['nome'];
                                $cpf = $_POST ['cpf'];
                                $nick = $_POST ['nick'];
        
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
         
                                echo "<p>Connected successfully<p>";
        
                                include('valida_cpf.php');
                                if ( !valida_cpf( $cpf ) ) {
                                      echo "CPF <span style='color:red'>" .$cpf. "</span> inválido.";
                                }else{
         
                                     $sql = "INSERT INTO 3655488_gab.tb_teste1 (nome, cpf, nick) VALUES ('$nome',' $cpf ',' $nick')";
                                     if (mysqli_query($conn, $sql)) {
                                             echo "<br>New record created successfully";
                                     }else{
                                             echo "Error: " . $sql . "<br>" . mysqli_error($conn);
                                             echo "<p>Volte à página inicial e refaça o cadastro.";
                                     }}
                                mysqli_close($conn);
                        ?>
                </div>
                <div id="footer">
                   <p>Criação de Gabriel Silvério - 2021
                   <a href="https://github.com/GabrielSilva09">Github Oficial</a>
                   <a href="https://www.linkedin.com/in/gabriel-silvério-b697201b8/">LinkedIn</a>
                </div>
        </body>
</html>