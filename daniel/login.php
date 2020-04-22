<?php
session_start();
    if(count($_POST) > 0){
        print_r($_POST);
        $_SESSION['logado']="sim";
        header('Location: index.php');
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="robots" content="noindex">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>

    <div class="loginForm">
        <form action="#" method="post">
        <label for="username" id="username">Usuário:</label>
        <input type="text" name="username" id="username" placeholder="Entre seu usuário">
        <label for="password" id="password">Senha</label>
        <input type="password" name="password" id="password" placeholder="Entre sua senha">
        <button id="access">Acessar</button>
        </form>
    </div>
    
</body>
</html>