<head>
<link rel="stylesheet" href="listar.css">
</head>
<?php  include "conexao.php"; ?>
<?php

$id = $_GET['id'];
$sql = "SELECT * FROM paginas WHERE id = $id";
$busca = mysqli_query($conexao, $sql);

while($dados=mysqli_fetch_array($busca)){
    
?>
<div class="tabela">
<form action="?pg=alterardb" method="post">
    <input type="hidden" name="id" value="<?=$dados['id'];?>"> 
<table>
    <tr>
        <td>Nome do Produto: </td>
        <td><input name="nome" type="text" value="<?=$dados['nome'];?>"/></td>
    </tr>
    <tr> 
        <td>Preço: </td>
        <td><input name="preco" type="text" value="<?=$dados['preco'];?>"/></td>
    </tr>
    <tr>
        <td>Quantidade do Produto: </td>
        <td><textarea name="conteudo" value="<?=$dados['conteudo'];?>"><?=$dados['conteudo'];?></textarea></td>
    </tr>
    <tr>
        <td></td>
        <td><button class="button-18" name="Enviar">Cadastrar</button></td>
    </tr>
</table>
</form>
</div>
<?php 
}
?>