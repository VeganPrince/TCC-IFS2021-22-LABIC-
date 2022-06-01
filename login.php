<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="./img/favicon (5).ico" type="image/x-icon">
    <link rel="stylesheet" href="./CSS/login.css">
    <link href="https://fonts.googleapis.com/css2?family=Mohave:wght@500&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Harmattan&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=BioRhyme&display=swap" rel="stylesheet">

    <title>Login - LABIC</title>
</head>

<body>

    <form action="./PHP/logar.php" method="post" id="login_form">
        <div id="div_login">
            <h1>Olá, seja bem-vindo(a)!</h1>
            <hr class="linhas">
            <h2>Faça seu login.</h2>
            <div class="input-group">
                <input type="text" class="field" id="usuario" name="email" required>
                <label for="usuario" class="field-label">E-mail</label>
            </div>
            <div class="input-group">
                <input type="password" class="field" id="senha" name="senha" required>
                <label for="senha" class="field-label">Senha</label>
            </div>
            <a href="" id="link_esqueceu">Esqueceu a senha?</a><br>
            <a href="./cadastro_pesquisador.php" id="link_esqueceu">Ainda não possui cadastro?</a>
            <button type="submit" class="btn_submit" name="btnLogin">ENTRAR</button>
        </div>
        <div id="div_img">
            <a href="./index1.php"><img src="./img/Laboratório de Inovação e Criatividade (2).png" alt="imagem_labic" id="img_labic"></a>
        </div>
        
    </form>
</body>

</html>