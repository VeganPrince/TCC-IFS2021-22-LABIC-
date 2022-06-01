<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="./img/favicon (5).ico" type="image/x-icon">
    <link rel="stylesheet" href="./CSS/pesquisadores.css">
    <link href="https://fonts.googleapis.com/css2?family=Mohave:wght@500&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans&display=swap" rel="stylesheet">
    <title>Pesquisadores - LABIC</title>
</head>

<body>

    <div class="container">
        <div class="menu-content">
            <img src="./img/Logo - LABIC (site).png" alt="logo_LABIC" id="logo">
            <div id="lista">
                <ul>
                    <a href="./index1.php" class="lista">
                        <li>Início</li>
                    </a>

                    <a href="./projetos.php" class="lista">
                        <li>Projetos</li>
                    </a>

                    <a href="./comunicacao.html" class="lista">
                        <li>Comunicação</li>
                    </a>

                </ul>
            </div>

        </div>
        <div class="cabecalho-content">
            <h1>Pesquisadores <img src="https://img.icons8.com/ios-filled/50/000000/survey.png" alt="icon_proj" id="icon_proj"></h1>



<!--            <a href="./cadastro_pesquisador.php" id="botao_mais"><button type="submit"><img src="https://img.icons8.com/ios/50/ffffff/plus--v1.png" id="png_botao" />
                    <p id="new_pesq">Novo Pesquisador</p>
                </button></a> --> 

        </div>
        <div class="main-content">
            <form action="./pesquisadores.php" method="get">
                <div class="pesquisa">

                    <select name="pesquisa" id="pesquisa" class="select">
                        <option value="" selected="selected" disabled class="option">Escolha qual a opção de busca.</option>
                        <option value="1" class="option">Id</option>
                        <option value="2" class="option">Nome</option>
                        <option value="3" class="option">E-mail</option>
                        <option value="4" class="option">Celular</option>
                    </select>
                    <div class="input-group">
                        <input type="text" class="field" id="search-pesq" required>
                        <label for="search-pesq" class="field-label">Procurar pesquisador:</label>
                    </div>

                    <div class="sub-pesq">
                        <a href="">
                            <button type="submit" id="btn-pesq"><img src="https://img.icons8.com/ios-filled/50/000000/search--v1.png" alt="img_pesq" id="pesq"></button>
                        </a>
                    </div>

                </div>
                <div class="pesquisadores">
                    <?php
                    include "./PHP/pesquisador.php";
                    $aluno = new Aluno();
                    $aluno->listarPesquisadores();
                    ?>
                </div>
                <input type="button" value="Imprima essa página." onclick="window.print(); " class="imprimir" />
            </form>


        </div>
    </div>

</body>

</html>