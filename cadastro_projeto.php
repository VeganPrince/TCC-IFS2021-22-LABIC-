<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="./img/favicon (5).ico" type="image/x-icon">
    <link rel="stylesheet" href="./CSS/cadastro_projeto.css">
    <link href="https://fonts.googleapis.com/css2?family=Mohave:wght@500&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Harmattan&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans&display=swap" rel="stylesheet">
    <title>Cadastro de Projeto - LABIC</title>
</head>

<body>
    <div class="container">

        <div class="menu-container">
            <a href="./index1.html"><img src="./img/Logo - LABIC (site).png" alt="logo LABIC" id="logo_labic"></a>

            <a href="./index1.html" class="link ">Início</a>
            <a href="./pesquisadores.html" class="link ">Pesq.</a>
            <a href="./projetos.php" class="link ">Proj.</a>
        </div>


        <form action="" method="post">

            <div class="cadastro-container ">

                <h1 class="principal-title">Cadastre o projeto</h1>

                <h2>Informações</h2>
                <hr class="linhas ">
                <div class="input-group ">
                    <input type="text" name="titulo" id="titulo" class="field" required><label for="titulo " class="field-label ">Título:</label>
                </div>
                <div class="input-group ">
                    <input type="text" name="programa" id="programa" class="field" required><label for="programa" class="field-label ">Programa:</label>
                </div>
                <div class="input-group ">
                    <input type="text" name="orientador" id="orientador" class="field" required><label for="orientador" class="field-label">Orientador(a):</label>
                </div>

                <div class="input-group ">
                    <input type="text" name="coorientador" id="coorienta" class="field" required><label for="coorienta" id="coorientador " class="field-label">Coorientador(a):</label>
                </div>

                <div class="input-group ">
                    <input type="text " name="instituicao" id="instituicao " class="field " required><label for="instituicao " class="field-label ">Instituição:</label>
                </div>

                <button type="submit " class="btn_submit" name="botao">Cadastrar</button>
                <?php
                if (isset($_POST["botao"])) {
                    include_once "./PHP/projetos.php";
                    $projeto = new Projetos();
                    $projeto->criarProjeto();
                }
                ?>
            </div>
        </form>


    </div>
</body>

</html>

</html>