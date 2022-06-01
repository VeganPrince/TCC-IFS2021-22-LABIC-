
<?php

abstract class Pesquisadores
{

    abstract protected function cadastrarAluno();
    abstract protected function cadastrarProf();
    abstract protected function listarPesquisadores();
    abstract protected function listarPesquisadoresPendentesAluno();
}

class Aluno extends Pesquisadores
{
    function cadastrarProf()
    {

        $servername = "localhost";
        $username = "root";
        $password = "A2522a//";
        $dbname = "labic";

        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $cpf = $_POST['cpf'];
        $cel = $_POST['cel'];
        $nasc = $_POST['data_nasc'];
        $senha = md5($_POST['password']);
        $estado = $_POST['estado'];
        $cidade = $_POST['cidade'];
        $bairro = $_POST['bairro'];
        $cep = $_POST['cep'];
        $rua = $_POST['rua'];
        $numCasa = $_POST['numCasa'];
        $banco = $_POST['banco'];
        $tipoConta = $_POST['tipo_conta'];
        $agencia = $_POST['agencia'];
        $conta = $_POST['num_conta'];


        try {
            $conn = new PDO("mysql:host=$servername;dbname=$dbname;charset=utf8", $username, $password);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $sql = "INSERT INTO professor (nome_prof, email_prof, cpf_prof, cel_prof, nasc_prof, senha_professor, estado_prof, cidade_prof, bairro_prof, cep_prof, rua_prof, numCasa_prof, banco_prof, tipoConta_prof, agencia_prof, numConta_prof, status_prof, tipo_prof, tipo_pesq) VALUES ('$nome', '$email', '$cpf', '$cel', '$nasc', '$senha', '$estado', '$cidade', '$bairro', '$cep', '$rua', '$numCasa', '$banco', '$tipoConta', '$agencia', '$conta', '1', '1', 1)";
            $stmt = $conn->prepare($sql);
            $stmt->execute();
            
            echo "<?php header(\"Location: ./login.php\"); ?>
            <script>alert('Pesquisador cadastrado com sucesso!');</script>";
        } catch (PDOException $e) {
            echo $sql . "<br>" . $e->getMessage();
        }
        $conn = null;
    }

    function cadastrarAluno()
    {
        $servername = "localhost";
        $username = "root";
        $password = "A2522a//";
        $dbname = "labic";

        $nome_aluno = $_POST['nome'];
        $email = $_POST['email'];
        $cpf = $_POST['cpf'];
        $cel = $_POST['cel'];
        $nasc = $_POST['data_nasc'];
        $senha = md5($_POST['password']);
        $estado = $_POST['estado'];
        $cidade = $_POST['cidade'];
        $bairro = $_POST['bairro'];
        $cep = $_POST['cep'];
        $rua = $_POST['rua'];
        $numCasa = $_POST['numCasa'];
        $banco = $_POST['banco'];
        $tipoConta = $_POST['tipo_conta'];
        $agencia = $_POST['agencia'];
        $conta = $_POST['num_conta'];


        try {
            $conn = new PDO("mysql:host=$servername;dbname=$dbname;charset=utf8", $username, $password);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $sql = "INSERT INTO aluno (nome_aluno, email_aluno, cpf_aluno, cel_aluno, nasc_aluno, senha_aluno, estado_aluno, cidade_aluno, bairro_aluno, cep_aluno, rua_aluno, numcasa_aluno, banco_aluno, tipoContaa_aluno, agencia_aluno, numConta_aluno, status_aluno, tipo_aluno, tipo_pesq) VALUES ('$nome_aluno', '$email', '$cpf', '$cel', '$nasc', '$senha', '$estado', '$cidade', '$bairro', '$cep', '$rua', '$numCasa', '$banco', '$tipoConta', '$agencia', '$conta', '1', '1', 2)";
            $stmt = $conn->prepare($sql);
            $stmt->execute();
            echo "<?php header(\"Location: ./login.php\"); ?>
            <script>alert('Pesquisador cadastrado com sucesso!');</script>";
        } catch (PDOException $e) {
            echo $sql . "<br>" . $e->getMessage();
        }
        $conn = null;
    }

    function listarPesquisadores()
    {
        $servername = "localhost";
        $username = "root";
        $password = "A2522a//";
        $dbname = "labic";
        try {
            $sql = "SELECT nome_aluno, cidade_aluno, estado_aluno, email_aluno, cel_aluno FROM aluno WHERE status_aluno = 1 ORDER BY id_aluno";
            $conn = new PDO("mysql:host=$servername;dbname=$dbname;charset=utf8", $username, $password);
            $consulta = $conn->query($sql);
            while ($linha = $consulta->fetch(PDO::FETCH_ASSOC)) {
                echo "
            <div style=\"background-color: #ADD8E6;
            border-radius: 15px;
            color: #020018;
            margin-bottom: 1vh;
            padding: 2vh;
            border: 1px solid #020018;
            box-shadow: 0 0 0.2rem #020018; 
            \">
            <h2>{$linha['nome_aluno']}</h2>
            <hr style=\"   width: 100%;
            height: 1px;
            color: #020018;
            border-width: 0;
            text-align: center;
            border-top-width: 1px;
            font-family: mohave, sans-serif;\">
            <h3 style=\"
            font-family: nunitos sans, sans-serif;
            font-weight: lighter;
            margin-bottom: 1vh;margin-top: 1vh;\">{$linha['cidade_aluno']} - {$linha['estado_aluno']}</h3> 
            <h5 style=\"
            font-family: nunitos sans, sans-serif;
            font-weight: lighter;\">E-mail: {$linha['email_aluno']} | Celular: {$linha['cel_aluno']} </h5>
            </div>
            ";
            }
        } catch (PDOException $e) {
            echo "Erro na execução: " . $e->getMessage();
        }
    }

    function mudarStatus($status, $id)
    {
        $servername = "localhost";
        $username = "root";
        $password = "A2522a//";
        $dbname = "labic";
        $conn = new PDO("mysql:host=$servername;dbname=$dbname;charset=utf8", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        if ($status == 2) {
            $sql = "UPDATE aluno SET status_aluno = 2 WHERE id_aluno = $id";
            $resultado_aluno = $conn->prepare($sql);
            $resultado_aluno->execute();
        } else if ($status == 3) {
            $sql = "UPDATE aluno SET status_aluno = 3 WHERE id_aluno = $id";
            $resultado_aluno = $conn->prepare($sql);
            $resultado_aluno->execute();
        }
    }

    function listarPesquisadoresPendentesAluno()
    {
        $servername = "localhost";
        $username = "root";
        $password = "A2522a//";
        $dbname = "labic";
        $conn = new PDO("mysql:host=$servername;dbname=$dbname;charset=utf8", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $sql = "SELECT nome_aluno, id_aluno, email_aluno, cel_aluno FROM aluno WHERE status_aluno = 1 ORDER BY id_aluno;";
        $resultado_aluno = $conn->prepare($sql);
        $resultado_aluno->execute();
        while ($row_aluno = $resultado_aluno->fetch(PDO::FETCH_ASSOC)) {

            if ($row_aluno['id_aluno'] % 2 == 0) {
                echo "<tr style=\"background-color: #ADD8E6;\">
                        <td>{$row_aluno['id_aluno']}</td>
                        <td>{$row_aluno['nome_aluno']}</td>
                        <td>{$row_aluno['email_aluno']}</td>
                        <td>{$row_aluno['cel_aluno']}</td>
                        <form action=\"./deferimento_de_cadastro.php\" method=\"post\">
                        <td> <input type=\"image\" src=\"./img/icons8_checked_checkbox_48px.png\" alt=\"check\" class=\"icons-ar\" name=\"aceito\" id=\"aceito\"  onclick=\"mudarStatus(\"1\", {$row_aluno['id_aluno']})\">
                         <input type=\"image\" src=\"./img/icons8_waste_52px.png\" alt=\"waste\" class=\"icons-ar\" name=\"rejeito\"  id=\"rejeito\"  onclick=\"mudarStatus(\"2\", {$row_aluno['id_aluno']})\"></td>
                        </form>
                        </tr>
                        ";
            } else {
                echo "<tr style=\"background-color: #FFFFFF;\">
                        <td>{$row_aluno['id_aluno']}</td>
                        <td>{$row_aluno['nome_aluno']}</td>
                        <td>{$row_aluno['email_aluno']}</td>
                        <td>{$row_aluno['cel_aluno']}</td>
                        <form action=\"./deferimento_de_cadastro.php\" method=\"post\">
                        <td><input type=\"image\" src=\"./img/icons8_checked_checkbox_48px.png\" alt=\"check\" class=\"icons-ar\" name=\"aceito\"  id=\"aceito\"onclick=\"mudarStatus(\"1\", {$row_aluno['id_aluno']})\"> <input type=\"image\" src=\"./img/icons8_waste_52px.png\" alt=\"waste\" class=\"icons-ar\" name=\"rejeito\" id=\"rejeito\" onclick=\"mudarStatus(\"2\", {$row_aluno['id_aluno']})\"></td>
                        </form>
                    </tr>
                    ";
            }
        }
    }

    function listarPesquisadoresPendentesProf()
    {
        $servername = "localhost";
        $username = "root";
        $password = "A2522a//";
        $dbname = "labic";
        $conn = new PDO("mysql:host=$servername;dbname=$dbname;charset=utf8", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "SELECT nome_prof, id_prof, email_prof, cel_prof FROM professor WHERE status_prof = 1 ORDER BY id_prof;";
        $resultado_prof = $conn->prepare($sql);
        $resultado_prof->execute();

        while ($row_prof = $resultado_prof->fetch(PDO::FETCH_ASSOC)) {

            if ($row_prof['id_prof'] % 2 == 0) {
                echo "<tr style=\"background-color: #ADD8E6;\">
                <td>{$row_prof['id_prof']}</td>
                <td>{$row_prof['nome_prof']}</td>
                <td>{$row_prof['email_prof']}</td>
                <td>{$row_prof['cel_prof']}</td>
                <form action=\"./deferimento_de_cadastro.php\" method=\"post\">
                <td> <input type=\"image\" src=\"./img/icons8_checked_checkbox_48px.png\" alt=\"check\" class=\"icons-ar\" name=\"aceito\" id=\"aceito\"  onclick=\"mudarStatus(\"1\", {$row_prof['id_prof']})\">
                 <input type=\"image\" src=\"./img/icons8_waste_52px.png\" alt=\"waste\" class=\"icons-ar\" name=\"rejeito\"  id=\"rejeito\"  onclick=\"mudarStatus(\"2\", {$row_prof['id_prof']})\"></td>
                </form>
                </tr>
                ";
            } else {
                echo "<tr style=\"background-color: #ffffff;\">
                <td>{$row_prof['id_prof']}</td>
                <td>{$row_prof['nome_prof']}</td>
                <td>{$row_prof['email_prof']}</td>
                <td>{$row_prof['cel_prof']}</td>
                <form action=\"./deferimento_de_cadastro.php\" method=\"post\">
                <td> <input type=\"image\" src=\"./img/icons8_checked_checkbox_48px.png\" alt=\"check\" class=\"icons-ar\" name=\"aceito\" id=\"aceito\"  onclick=\"mudarStatus(\"1\", {$row_prof['id_prof']})\">
                 <input type=\"image\" src=\"./img/icons8_waste_52px.png\" alt=\"waste\" class=\"icons-ar\" name=\"rejeito\"  id=\"rejeito\"  onclick=\"mudarStatus(\"2\", {$row_prof['id_prof']})\"></td>
                </form>
                </tr>
                ";
            }
        }
    }
}
