<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Registro</title>

    <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" type="text/css" href="style/register.css">
</head>

<body>
    <div class="container">
        <form class="formulario-cadastro" action="backRegister.php" method="POST">
            <div class="title">
                <h1>Sign in</h1>
            </div>

            <div class="input-name">
                <i class="fas fa-user"></i>
                <input type="text" name="username" placeholder="Nome de usuario" required>
            </div>

            <div class="input-email">
                <i class="fas fa-envelope"></i>
                <input type="email" name="email" class="input-email" placeholder="Digite seu email" required>
            </div>

            <div class="input-senha">
                <i class="fas fa-lock"></i>
                <input type="password" name="password" placeholder="Digite sua senha" required>
            </div>

            <input type="submit" value="Sign In" class="input-botao">
        </form>
    </div>

    <div class="container-2">
        <div class="imagem-1">
            <img src="images/register.svg" alt="Logo">
        </div>

        <div class="text">
            <h2 class="title-2">
                Um de nós
            </h2>
            <p class="paragrafo-2">
                Lorem ipsum dolor sit amet, consectetur <br>adipisicing elit. Nemo, atque?
            </p>

            <a href="login.php">
                <button type="submit" class="botao">Sign Up</button>
            </a>
        </div>
    </div>
</body>

</html>