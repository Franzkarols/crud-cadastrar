<?php
session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Crud - Cadastrar</title>
    </head>
    <body>
        <h1>Cadastrar Usuário</h1>
        <?php
        if(isset($_SESSION['msg'])){
            echo $_SESSION['msg'];
            unset($_SESSION['msg']);
        }
        ?>
        <form action="processa.php" method="POST">
            <label>Nome: </label>
            <input type="text" name="nome" placeholder="Digite seu nome completo"><br><br>
        
            <label>E-mail:</label>
            <input type="email" name="email" placeholder="Digite seu e-mail">

            <p>
            <input type="submit" value="Cadastrar">
        </form>
        
    </body>
</html>