<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="./img/favicon (5).ico" type="image/x-icon">
    <link rel="stylesheet" href="./CSS/deferimento_de_cadastro.css">
    <link href="https://fonts.googleapis.com/css2?family=Mohave:wght@500&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans&display=swap" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.4/js/jquery.dataTables.min.js"></script>
    <script type="text/JavaScript" src="./JS/funcoes.js"></script>
    <title>Deferir Cadastro</title>
</head>

<body>

    <div class="container">

        <div class="container-menu">

            <img src="./img/Logo - LABIC (site).png" alt="logoLABIC" id="logo">


            <ul class="lista">
                <li class="lista-content">
                    <a href="./index1.php">Início</a>
                </li>
                <li class="lista-content">
                    <a href="./projetos.php">Projeto</a>
                </li>
                <li class="lista-content">
                    <a href="./pesquisadores.php">Pesquisador</a>
                </li>
            </ul>

        </div>

        <div class="container-content">

            <div class="cabecalho-container-content">

                <div class="text-title">
                    <h1>Deferimento de Cadastros</h1>
                    <img src="./img/icons8_order_history_100px.png" alt="deferimento de cadastro" id="icon">
                </div>

            </div>
            <script>
                $(document).ready(function() {
                    $('#table_id').DataTable();
                });
            </script>

            <div class="main-container">
                <div class="grupo">
                    <h2>Escolha:</h2>
                    <div class="escolha">
                        <form action="./deferimento_de_cadastro.php" method="get">
                            <div class="input-group">
                                <input type="radio" name="escolha" id="prof" value="1" class="in-ver">
                                <label for="prof">Professor</label>
                            </div>
                            <div class="input-group">
                                <input type="radio" name="escolha" id="aluno" value="2" class="in-ver">
                                <label for="aluno">Aluno</label>
                            </div>
                            <button type="submit" id="btn-ver">Ver</button>
                        </form>
                    </div>
                </div>


                <table id="table_id" class="display">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Nome</th>
                            <th>E-mail</th>
                            <th>Celular</th>
                            <th>Aceitar/Rejeitar</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        include "./PHP/pesquisador.php";
                        $aluno = new Aluno();
                        if (isset($_GET['escolha'])) {
                            if ($_GET['escolha'] == 1) {
                                $aluno->listarPesquisadoresPendentesProf();
                            } else if ($_GET['escolha'] == 2) {
                                $aluno->listarPesquisadoresPendentesAluno();
                            }
                        }

                        ?>
                    </tbody>
                </table>
            </div>
        </div>

    </div>

</body>

</html>