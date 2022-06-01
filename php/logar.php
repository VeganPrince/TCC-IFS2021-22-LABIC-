<?php
session_start();

if (isset($_POST['email']) && !empty($_POST['email']) && isset($_POST['senha']) && !empty($_POST['senha'])) {
    require './conexao.php';
    require './classes/UsuarioClass.php';

    $usuario = new Usuario();

    $email = addslashes($_POST['email']);
    $senha = addslashes($_POST['senha']);

    if ($usuario->login($email, $senha) == true) {
        if (isset($_SESSION['id_pesq'])) {

            header("Location: ../index1.php");
        } else {

            header("Location: ../login.php");
            echo ' <script>
            alert("E-mail ou senha incorretos!");
            </script>';
        }
    } else {

        header("Location: ../login.php");
        echo ' <script>
        alert("E-mail ou senha incorretos!");
        </script>';
    }
} else {

    header("Location: ../login.php");
    echo ' <script>
    alert("E-mail ou senha incorretos!");
    </script>';
}
