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
        <h1>Cadastrar</h1>
        <form action="cadastrar.php" method="post" enctype="multipart/form-data">
            <label for="nome">Nome:
                <input type="text" name="nome">
            </label><br>
            <label for="email">Email:
                <input type="text" name="email">
            </label><br>
            <label for="senha">Senha:
                <input type="password" name="senha">
            </label><br>
            <label for="senha">Foto:
                <input name="arquivo" type="file" id="Capa" style="display: none;">
            </label><br>
            <input type="submit" value="Enviar">
        </form>
        <div class="links">
            <a href="index.php">Login</a>
        </div>
    </div>
</body>

</html>