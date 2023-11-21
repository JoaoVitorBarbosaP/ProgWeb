<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="cadastro.css">
    <title>Cadastro</title>
</head>
<body>
 
    <section>
    <div class="form-box">
       <div class="form-value">
        <form  action="cadastrardb.php" method="POST">
            <h2>Cadastro</h2>
            <div class="inputbox">
                <ion-icon name="fodase"></ion-icon>
                <input type="name" required name="usuario" >
                <label for="">Nome</label>
            </div>
            <div class="inputbox">
                <ion-icon name="lock-closed-outline"></ion-icon>
                <input type="password" required name="senha">
                <label for="">Senha</label>
            </div>
            <button>Cadastrar</button>
        </form>
       </div>     
    </div>
    </section>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

      
</body>
</html>