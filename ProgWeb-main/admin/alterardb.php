<head>
    <link rel="stylesheet" href="style.css">
</head>
<?php include "conexao.php";?>
<?php

$id =           $_POST['id'];
$nome =       $_POST['nome'];
$preco =    $_POST['preco'];
$conteudo =        $_POST['conteudo'];


$sql2 = mysqli_query($conexao, "SELECT * FROM paginas WHERE id='$id'");

$sql = "UPDATE paginas SET nome='$nome', preco='$preco', conteudo='$conteudo' WHERE id=$id";
$altera = mysqli_query($conexao, $sql);

if(!$altera){
    echo "Ocorreu um erro ao atualizar dados no banco de dados. <br>
    <a href='?pg=listar'>Voltar</a>";
}else{
}
?>
<div class="tabela" style="
        text-decoration: none;
        align-items: center;
        justify-content: space-between;
        font-size: large;
        position: absolute;
        background-color:  rgb(209, 209, 209);
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        padding: 40px;
        border-radius: 15px;">
    <h3>Cadastrada com sucesso!</h3>
    <center><a href='?pg=listar'><button class="button-18">Voltar</button></a></center>
</div>