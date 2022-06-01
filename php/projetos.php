
<?php

class Projetos
{

    public function listarProjetos()
    {
        $servername = "localhost";
        $username = "root";
        $password = "A2522a//";
        $dbname = "labic";
        try {
            include "./PHP/conexao.php";
            $sql = "SELECT titulo_projeto, programa_proj, orientador_proj, coorientador_proj, intituicao_proj FROM projeto;";
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
            <h2>{$linha['titulo_projeto']}</h2>
            <hr style=\"   width: 100%;
            height: 1px;
            color: #020018;
            border-width: 0;
            text-align: center;
            border-top-width: 1px;
            font-family: mohave, sans-serif;\">
            <h3 style=\"
            font-family: nunito sans, sans-serif;
            font-weight: lighter;
            margin-bottom: 1vh;margin-top: 1vh;\">Orientador(a): {$linha['orientador_proj']}</h3> 
            <h4 style=\"
            font-family: nunito sans, sans-serif;
            font-weight: lighter;
            margin-bottom: 1vh;\">Corientador(a): {$linha['coorientador_proj']}</h4>
            <h5 style=\"
            font-family: nunitos sans, sans-serif;
            font-weight: lighter;\">Instituição: {$linha['intituicao_proj']} | Programa: {$linha['programa_proj']}</h5>
            </div>
            ";
            }
        } catch (PDOException $e) {
            echo "Erro na execução: " . $e->getMessage();
        }
    }

    public function criarProjeto()
    {
        $servername = "localhost";
        $username = "root";
        $password = "A2522a//";
        $dbname = "labic";

        $titulo_projeto = $_POST["titulo"];
        $programa_proj = $_POST["programa"];
        $orientador_proj = $_POST["orientador"];
        $coorientador_proj = $_POST["coorientador"];
        $instituicao_proj = $_POST["instituicao"];

        try {
            $sql = "INSERT INTO projeto (titulo_projeto, programa_proj, orientador_proj, coorientador_proj, intituicao_proj) VALUES ('$titulo_projeto',' $programa_proj', '$orientador_proj', '$coorientador_proj', '$instituicao_proj');";
            $conn = new PDO("mysql:host=$servername;dbname=$dbname;charset=utf8", $username, $password);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $stmt = $conn->prepare($sql);
            $stmt->execute();
            //$conn->exec($sql);
            echo "<h1>Projeto cadastrado com sucesso!<h1/>";
        } catch (PDOException $e) {
            echo $sql . "<br>" . $e->getMessage();
        }
        $conn = null;
    }
}
