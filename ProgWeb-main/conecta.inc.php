<?php
    // conectando ao servidor
    $conexao = mysqli_connect("localhost","root","");

    // conectando ao BD criado
    $db = mysqli_select_db($conexao, "principal");

    //if($conexao->connect_errno) {
     //   echo "Erro";
    //} else {
     //   echo "Conexao Efetuada!";
    //}





?>