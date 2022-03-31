<!DOCTYPE html>
<html>

<head>
    <title>Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
    <center>
        <div class="floating-box">
            <form action="login/run" name="form" method="POST">
                <label for="uname">Usuário</label>
                <input type="text" id="user-name" name="username"><br><br>

                <label for="pwd">Senha</label>
                <input type="password" id="passowrd" name="password"><br><br>

                <input type="submit" name="submit" id="submit" value="Login"><br>

                <p>Novo usuário? <a href="signup.php">Registre-se aqui</a></p>
            </form>
        </div>
    </center>
</body>

</html>