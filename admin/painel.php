<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Painel Admin</title>
    <link rel="stylesheet" href="painelstyle.css">
</head>
<body>
<header>
    <div class="container">
        <div class="row">
            <div class="topo">
                <img src="https://grupofgrefrigeracao.com.br/wp-content/uploads/2018/02/icone-1.png" height="75" width="75">
                <h1 class="page-header">Painel Admin </h1> 
                <a class="botao" href="login.php"><button class="button-18">Logout</button></a>
            </div>
           
            <div class="painelist">
                    <p><a href="painel.php"><button class="button-18" role="button">Home</button></a></p>
                    <p><a href="?pg=listar"><button class="button-18" role="button">Listar Produtos</button></a></p>
                    <p><a href="?pg=inserir"><button class="button-18" role="button">Inserir Produto</button></a></p>
                    <p><a href="?pg=list_user"><button class="button-18" role="button">Listar Usuário</button></a></p>
                    <p><a href="?pg=formulario"><button class="button-18" role="button">Listar Formulário</button></a></p>

            </div>
        </div>
              <center><img width="1341" height="500" src="https://grupofgrefrigeracao.com.br/wp-content/uploads/2018/02/banner_principal_sem_texto_para_programacao.png"></center>

        <?php
        // Declarando as variáveis de acesso as páginas
        $var = "admin/home.php";
        // o @ suprime avisos de erro do PHP.
        @$pg = $_GET['pg'];
    
        // Utilizando a variável Superglobal SERVER
        // Para testar se o parâmetro Query_String está
        // sendo utilizado.
    
        if(empty($_SERVER["QUERY_STRING"])) {
            
        } else {
            include("$pg.php");
        }
    ?>
        
    </div>
</header>


    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>
</html>
