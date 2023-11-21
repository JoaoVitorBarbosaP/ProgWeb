<?php
    include_once "conexao.php";

    if($_SERVER["REQUEST_METHOD"] == "POST") {
        $usuario = $_POST['usuario'];
        $senha = $_POST['senha'];

        $sql = "INSERT INTO usuarios (usuario, senha) VALUES (?, ?)";

        $stmt =$conexao->prepare($sql);
        $stmt->bind_param("ss", $usuario, $senha);
        
        if($stmt->execute()) {
            echo "Usuário criado com sucesso!";
            header("Location: login.php");
        } else {
            echo "Erro: " . $sql . "<br>" . $conexao->error;
        }
    
        $stmt->close();
    }
    $conexao->close();

?>
