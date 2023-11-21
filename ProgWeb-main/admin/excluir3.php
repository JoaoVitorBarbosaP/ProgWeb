<?php

        include_once('conexaoformulario.php');

        $id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
        $result_usuario = "DELETE FROM formulario WHERE id='$id'";
        $resultado_usuario = mysqli_query($conexao, $result_usuario);

   
    header('Location: painel.php');
   
?>