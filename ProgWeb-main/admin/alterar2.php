<head>
<link rel="stylesheet" href="listar.css">
</head>
<?php  include "conexaoformulario.php"; ?>
<?php

$id = $_GET['id'];
$sql = "SELECT * FROM formulario WHERE id = $id";
$busca = mysqli_query($conexao, $sql);

while($dados=mysqli_fetch_array($busca)){
    
?>
<div class="tabela">
<form action="?pg=alterardb2" method="post">
    <input type="hidden" name="id" value="<?=$dados['id'];?>"> 
<table>
    <tr>
        <td>Nome: </td>
        <td><input name="nome" type="text" value="<?=$dados['nome'];?>"/></td>
    </tr>
    <tr> 
        <td>E-mail: </td>
        <td><input name="email" type="text" value="<?=$dados['email'];?>"/></td>
    </tr>
    <tr>
        <td>Número: </td>
        <td><input name="telefone" type="text" value="<?=$dados['telefone'];?>"/></td>
    </tr>
    <tr>
        <td>Produto: </td>
        <td><input name="assunto" type="text" value="<?=$dados['assunto'];?>"/></td>
    </tr>
    <td>Dúvida: </td>
        <td><textarea name="mensagem" value="<?=$dados['mensagem'];?>"><?=$dados['mensagem'];?></textarea></td>
    <tr>
        <td></td>
        <td><button class="button-18" name="Enviar">Alterar</button></td>
    </tr>
</table>
</form>
</div>
<?php 
}
?>