<script language='javascript'>

function confirmaExclusao(aURL) {

    if(confirm('Você tem certeza que deseja excluir?')) {
    location.href = aURL;
    }
}

</script>
<head>
    <link rel="stylesheet" href="listar.css">
</head>
<?php
    include_once "conexaoformulario.php";

    $busca = "SELECT * FROM formulario ORDER BY id";

    $todos = mysqli_query($conexao, $busca);
?>
<table class="tabela">
    <tr>
        <td style="width: 25px;">Id </td>
        <td style="width: 205px;">Nome </td>
        <td style="width: 205px;">E-mail</td>
        <td style="width: 205px;">Número</td>
        <td style="width: 105px;">Produto</td>
        <td style="width: 105px;">Dúvida</td>
        <td style="width: 105px;">Alterar</td>
        <td style="width: 105px;">Excluir</td>
    </tr>
</div>
    <?php while ($dados=mysqli_fetch_array($todos)) {?>
    <tr>
       
        <td><?=$dados['id'];?></td>
        <td><?=$dados['nome'];?></td>
        <td><?=$dados['email'];?></td>
        <td><?=$dados['telefone'];?></td>
        <td><?=$dados['assunto'];?></td>
        <td><?=$dados['mensagem'];?></td>
        <td><a href="?pg=alterar2&id=<?=$dados['id']; ?>"><button class="button-18" role="button">Alterar</button></a></td>
        <td><a href="javascript:confirmaExclusao('excluir3.php?&id=<?=$dados['id']; ?>')" class="ask"><button class="button-18" role="button">Excluir</button></a></td>
    </tr>
    <?php } ?>
</table>