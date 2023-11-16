<head>
    <link rel="stylesheet" href="style.css">
</head>
<?php include "conexaoformulario.php";?>
<?php

$id =           $_POST['id'];
$nome =       $_POST['nome'];
$email =    $_POST['email'];
$telefone =        $_POST['telefone'];
$assunto =    $_POST['assunto'];
$mensagem =    $_POST['mensagem'];

$sql2 = mysqli_query($conexao, "SELECT * FROM formulario WHERE id='$id'");

$sql = "UPDATE formulario SET nome='$nome', email='$email', telefone='$telefone', assunto='$assunto', mensagem='$mensagem' WHERE id=$id";
$altera = mysqli_query($conexao, $sql);

if(!$altera){
    echo "Ocorreu um erro ao atualizar dados no banco de dados. <br>
    <a href='?pg=formulario'>Voltar</a>";
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
    <center><a href='?pg=formulario'><button class="button-18">Voltar</button></a></center>
</div>