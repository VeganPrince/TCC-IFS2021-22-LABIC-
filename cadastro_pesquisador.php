<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="./img/favicon (5).ico" type="image/x-icon">
    <link rel="stylesheet" href="./CSS/cadastro_pesquisador.css">
    <link href="https://fonts.googleapis.com/css2?family=Mohave:wght@500&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Harmattan&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans&display=swap" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.11/jquery.mask.min.js"></script>
    <title>Cadastro Pesquisador - LABIC</title>
</head>

<body>

    <div class="container">

        <div class="menu-container">
            <a href="./index1.php"><img src="./img/Logo - LABIC (site).png" alt="logo LABIC" id="logo_labic"></a>

            <a href="./login.php" class="link">Entrar</a>
        </div>


        <form action="./cadastro_pesquisador.php" method="post">

            <div class="cadastro-container">

                <h1>Crie sua conta</h1>

                <h2>Informações Pessoais</h2>
                <hr class="linhas">
                <div class="input-group">
                    <input type="text" name="nome" id="nome" class="field" required><label for="nome" class="field-label">Nome</label>
                </div>
                <div class="input-group">
                    <input type="email" name="email" id="email" class="field" required><label for="email" class="field-label">E-mail</label>
                </div>
                <div class="input-group">
                    <input type="text" name="cpf" id="cpf" class="field" required><label for="cpf" class="field-label">CPF</label>
                </div>
                <div class="input-group">
                    <input type="text" name="cel" id="cel" class="field" required><label for="cel" class="field-label">Celular</label>
                </div>
                <div class="input-group">
                    <input type="date" name="data_nasc" id="data_nasc" class="field"><label for="data_nasc" id="dtn">Data de Nascimento</label>
                </div>
                <div class="senhas">
                    <div class="input-group">
                        <input type="password" name="password" id="password" class="field" required>
                        <label for="password" class="field-label ">Crie uma senha</label>
                    </div>
                    <img src="./img/icons8_eye_48px.png" alt="show" onclick="mostrarSenha()" class="confirm">
                </div>
                
                <h2>Endereço do Pesquisador</h2>
                <hr class="linhas ">

                <div class="input-group ">
                    <input type="text " name="estado" id="estado " class="field " required><label for="estado " class="field-label ">Estado</label>
                </div>
                <div class="input-group ">
                    <input type="text " name="cidade" id="cidade " class="field " required><label for="cidade " class="field-label ">Cidade</label>
                </div>
                <div class="input-group ">
                    <input type="text " name="bairro" id="bairro " class="field " required><label for="bairro " class="field-label ">Bairro</label>
                </div>
                <div class="input-group ">
                    <input type="text " name="cep" id="cep" class="field " required><label for="cep " class="field-label ">CEP</label>
                </div>
                <div class="input-group ">
                    <input type="text " name="rua" id="rua " class="field " required><label for="rua " class="field-label ">Rua</label>
                </div>
                <div class="input-group ">
                    <input type="text " name="numCasa" id="num_casa " class="field " required><label for="num_casa " class="field-label ">Número (casa)*</label>
                </div>
                <div class="input-group ">
                    <input type="text " name="comple" id="comple " class="field " required><label for="comple " class="field-label ">Complemento *</label>
                </div>

                <h2>Dados Bancários</h2>
                <hr class="linhas ">

                <div class="input-group ">

                    <input type="text " name="banco" id="banco " class="field " required><label for="banco " class="field-label ">Banco</label>
                </div>
                <div class="input-group ">
                    <label for="tipo_conta " class="exc ">Tipo de Conta</label>
                    <select name="tipo_conta" id="tipo_conta " class="field ">
                        <option value=" " selected disabled="disabled ">Selecione o tipo de sua conta</option>
                        <option value="1 ">Conta Corrente</option>
                        <option value="2 ">Conta Poupança</option>
                        <option value="3 ">Carteira digital</option>
                    </select>
                </div>
                <div class="input-group ">
                    <input type="text " name="agencia" id="agencia " class="field " required><label for="agencia " class="field-label ">Agência</label>
                </div>
                <div class="input-group ">
                    <input type="text " name="num_conta" id="num_conta " class="field " required><label for="num_conta " class="field-label ">Conta com dígito verificador</label>
                </div>

                <h2>Que pesquisador você é? (selecione): </h2>
                <hr class="linhas">

                <div class="radio">

                    <div class="radio-content">
                        <input type="radio" name="tipo_pesq" id="aluno-radio" value="1">
                        <label for="aluno-radio">Aluno</label>
                    </div>

                    <div class="radio-content">
                        <input type="radio" name="tipo_pesq" id="prof-radio" value="2">
                        <label for="prof-radio">Professor</label>
                    </div>

                </div>

                <button type="submit" class="btn_submit" name="botao">Cadastrar</button>

                <?php
                include "./PHP/pesquisador.php";
                if (isset($_POST['botao'])) {
                    $tipoPesq = $_POST['tipo_pesq'];
                    if ($tipoPesq == 1) {
                        $aluno = new Aluno();
                        $aluno->cadastrarAluno();
                    } else if ($tipoPesq == 2) {
                        $aluno = new Aluno();
                        $aluno->cadastrarProf();
                    }
                }
                ?>
            </div>
            <script>
                function mostrarSenha() {
                    var tipo = document.getElementById("password");
                    if (tipo.type == "password") {
                        tipo.type = "text";
                    } else {
                        tipo.type = "password";

                    }
                }

                function confirmarSenha() {
                    var tipo = document.getElementById("confirm");
                    if (tipo.type == "password") {
                        tipo.type = "text";
                    } else {
                        tipo.type = "password";

                    }
                }
            </script>

        </form>

    </div>

    <script type="text/javascript">
        $("#cel").mask("(00)00000-0000");
        $("#cpf").mask("000.000.000-00");
        $("#cep").mask("00000-000");
    </script>
</body>

</html>