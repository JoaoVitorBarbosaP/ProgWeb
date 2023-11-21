<?php include "conexao.php"; ?>
<head>
    <link rel="stylesheet" href="listar.css">
</head>
<?php

$nome = $_POST['nome'];
$preco = $_POST['preco'];
$conteudo = $_POST['conteudo'];

$sql = "INSERT INTO paginas VALUES ('', '$nome', '$preco', '$conteudo')";

//echo $sql;

$insert = mysqli_query($conexao, $sql);

if(!$insert){
    echo "Ocorreu um erro ao cadastrar no banco de dados. <a href='?pg=inserir'>Tente Novamente</a>";
}else{}
    ?>
    <div class="tabela">
    <h3>Cadastrada com sucesso!</h3><br>
    <center><a href='?pg=inserir'><button class="button-18">Cadastrar Novamente</button></a><br><br></center>
    <center><a href='?pg=listar'><button class="button-18">Listar Produtos</button></a></center>
   </div>
