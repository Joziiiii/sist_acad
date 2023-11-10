<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style2.css">
    <img src="images/braco.svg" alt="img" width="300" height="300">
    <title>GlowShape</title>
</head>
<body>
    <h1>Glow Shape</h1>
    <script>
        function redirecionarParaLogin() {
            window.location.href = "logar_usuario_form.php";
        }

        function redirecionarParaCadastro() {
            window.location.href = "cadastrar_inicial_form.php";
        }
    </script>

    <button type="button" onclick="redirecionarParaLogin()">Login</button>
    <a href="cadastrar_inicial_form.php" class="bottom-link">Criar nova conta</a>
</body>
</html>
