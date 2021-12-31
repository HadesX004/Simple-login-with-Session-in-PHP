<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Login</title>

    <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" type="text/css" href="style/login.css">
</head>

<body>
    <div class="container">
        <form class="formulario-login" action="backLogin.php" method="POST">
            <div class="title">
                <h1>
                    Sign in
                </h1>
            </div>

            <div class="input-nome">
                <i class="fas fa-user"></i>
                <input type="text" name="email" class="input-nome" placeholder="Email" required>
            </div>

            <div class="input-senha">
                <i class="fas fa-lock"></i>
                <input type="password" name="password" class="input-senha" placeholder="Digite sua senha" required>
            </div>

            <input type="submit" class="input-botao" value="Login">
        </form>
    </div>

    <div class="container-2">
        <div class="imagem-1">
            <img src="images/log.svg" alt="Imagem cadastro">
        </div>

        <div class="text">
            <h2 class="sub-title">
                Novo aqui ?
            </h2>

            <p class="paragrafo">
                Lorem ipsum dolor sit amet consectetur ipsum. <br> Lorem ipsum sit.
            </p>

            <a href="register.php">
                <button type="submit" class="botao-2">Sign Up</button>
            </a>
        </div>
    </div>
</body>

</html>