<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="./img/favicon (5).ico" type="image/x-icon">
    <link rel="stylesheet" href="./CSS/projetos.css">
    <link href="https://fonts.googleapis.com/css2?family=Mohave:wght@500&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans&display=swap" rel="stylesheet">
    <title>Projetos - LABIC</title>
</head>

<body>

    <div class="container">
        <div class="menu">
            <img src="./img/Logo - LABIC (site).png" alt="logo_LABIC" id="logo">
            <div id="lista">
                <ul>
                    <a href="./index1.php" class="lista">
                        <li>Início</li>
                    </a>

                    <a href="./pesquisadores.php" class="lista">
                        <li>Pesquisador</li>
                    </a>

                    <a href="./comunicacao.html" class="lista">
                        <li>Comunicação</li>
                    </a>

                </ul>
            </div>

        </div>
        <div class="cabecalho">
            <h1>Projetos <img src="https://img.icons8.com/ios/2x/project.png" alt="icon_proj" id="icon_proj"></h1>
            <?php
            session_start();
            if (isset($_SESSION['tipo_pesq']) && $_SESSION['tipo_pesq'] == 1) {
                echo '<a href="./cadastro_projeto.php" id="botao_mais"><button type="submit" id="btn-new"><img src="https://img.icons8.com/ios/50/ffffff/plus--v1.png" id="png_botao" />
                    <p id="new_proj">Novo Projeto</p>
                </button></a>';
            }
            ?>
        </div>
        <div class="main">


            <form action="projetos.php" method="get">
                <div class="pesquisa">
                    <div class="input-group">
                        <input type="text" class="field" id="search-pesq" required>
                        <label for="search-pesq" class="field-label">Procurar projeto:</label>
                    </div>

                    <div class="sub-pesq">
                        <button type="submit" id="btn-pesq"><img src="https://img.icons8.com/ios-filled/50/000000/search--v1.png" alt="img_pesq" id="pesq"></button>
                    </div>
                </div>
            </form>

            <?php
            include  "./PHP/projetos.php";
            $projeto = new Projetos();
            $projeto->listarProjetos(); ?>
            <div class="impressao">
                <input type="button" value="Imprima essa página." onclick="window.print(); " class="imprimir" />
            </div>

        </div>
    </div>

</body>

</html>