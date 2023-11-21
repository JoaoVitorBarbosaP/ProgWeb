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

$busca = "Select * from paginas order by id";

$todos = mysqli_query($conexao, $busca);

?>
<div class="tabela">
<table>
    <tr>
        <td style="width: 25px;">Id </td>
        <td style="width: 205px;">Nome do produto</td>
        <td style="width: 205px;">Preço</td>
        <td style="width: 205px;">Quantidade</td>
        <td style="width: 105px;">Alterar</td>
        <td style="width: 105px;">Excluir</td>
    </tr>
</div>
    <?php while ($dados=mysqli_fetch_array($todos)) {?>
    <tr>
       
        <td><?=$dados['id'];?></td>
        <td><?=$dados['nome'];?></td>
        <td><?=$dados['preco'];?></td>
        <td><?=$dados['conteudo'];?></td>
        <td><a href="?pg=alterar&id=<?=$dados['id']; ?>"><button class="button-18" role="button">Alterar</button></a></td>
        <td><a href="javascript:confirmaExclusao('excluir.php?&id=<?=$dados['id']; ?>')" class="ask"><button class="button-18" role="button">Excluir</button></a></td>
    </tr>
    
    <?php } ?>


</table>