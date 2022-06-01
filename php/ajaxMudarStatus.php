<?php
$_id = $_POST['id'];
$_status = $_POST['situation'];
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

if ($_status == "1") {
    mudarStatus(2, $id);
} else if ($_status == "2") {
    mudarStatus(3, $id);
}
