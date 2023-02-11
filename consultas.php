<html>
        <head>
                <title>Consulta de dados</title>
                <link href="mainstyle.css" rel="stylesheet" type="text/css">
        </head>
        <body>
                <div id = "header">
                        <a href = "index.html">Página Inicial</a>
                </div>
                <div id = "body">
                                        <h1 class="light">Consultas</h1><hr>
        
                                        <table class="striped">
                                                <thead>
                                                        <th>Nome</th>
                                                        <th>CPF</th>    
                                                        <th>Nick</th>
                                                </thead>
                                                <tbody>
                                                        <?php 
                                                                include_once 'consulta.php';
                                                        ?> 
                                                </tbody>
                                        </table>
                </div>
                <div id="footer">
                   <p>Criação de Gabriel Silvério - 2021
                   <a href="https://github.com/GabrielSilva09">Github Oficial</a>
                   <a href="https://www.linkedin.com/in/gabriel-silvério-b697201b8/">LinkedIn</a>
                </div>
        </body>
</html>