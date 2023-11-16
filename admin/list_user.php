<head>
<link rel="stylesheet" href="listar.css">
</head>
<script language='javascript'>

function confirmaExclusao(aURL) {

    if(confirm('Você tem certeza que deseja excluir?')) {
    location.href = aURL;
    }
}

</script>
<?php include "conexao.php"; ?>
<?php

$busca = "Select * from usuarios order by id";

$todos = mysqli_query($conexao, $busca);

?>
<div class="tabela">
<table>
    <tr>
        <td style="width: 25px;">Id</td>
        <td style="width: 205px;">Usuário</td>
        <td style="width: 105px;">Senha</td>
        <td style="width: 105px;">Excluir</td>
    </tr>
    <?php while ($dados=mysqli_fetch_array($todos)) {?>
    
    <tr>
        <td><?=$dados['id'];?></td>
        <td><?=$dados['usuario'];?></td>
        <td><?=$dados['senha']; ?></td>
        <td><a href="javascript:confirmaExclusao('excluir2.php?&id=<?=$dados['id']; ?>')" class="ask"><button class="button-18" role="button">Excluir</button></a></td>
    </tr>
</div>
    
    <?php } ?>


</table>