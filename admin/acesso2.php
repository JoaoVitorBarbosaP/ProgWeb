<?php
include_once "conexao.php";

    if($_SERVER["REQUEST_METHOD"] == "POST") {
        $usuario = $_POST['usuario'];
        $senha = $_POST['senha'];
    }

    $sql = "SELECT * FROM usuarios WHERE usuario = ?";

    $stmt = $conexao->prepare($sql);
    $stmt ->bind_param("s", $usuario);
    $stmt->execute();

    $result = $stmt->get_result();

    if ($result->num_rows === 1) {
        $row = $result->fetch_assoc(); 

        if (password_verify($senha, $row['senha'])) {

            $_SESSION["loggedin"] = true; 

        

        }
        header("Location: painel.php"); 
            exit;
    }

    else {
        echo"<script language='javascript' type='text/javascript'>
            alert('Login e/ou senha incorretos $login | $senha');window.location
            .href='login.php';</script>";
      
    }

?>