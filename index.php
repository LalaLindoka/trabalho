<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Login</title>
</head>
<body>
    <div class="container">
        <h1>Login</h1>
        <form action="login.php" method="post">
            <label for="email">Email: 
                <input type="text" name="email">
            </label><br>
            <label for="senha">Senha: 
                <input type="password" name="senha">
            </label><br>
            <input type="submit" value="Enviar">
        </form>
        <div class="links">
            <a href="form-cadastrar.php">Cadastre-se</a><br>
            <a href="form-recuperar-senha.php">Recuperar Senha</a>
        </div>
    </div>
</body>
</html>
