<?php
      //conecta o bd
      include_once('conexao.php');
      include_once('alert.php');

      session_start();

      $btnLogin = filter_input(INPUT_POST, 'btnLogin', FILTER_SANITIZE_STRING);
      //VERIFICA SE O BOTÃO DE INPUT FOI ACIONADO e só acessa area restrita de apertar o botao

      if($btnLogin){
      //receeb o nome do usuario pelo filtro
        $usuario = filter_input(INPUT_POST, 'usuario', FILTER_SANITIZE_STRING);
        $senha = filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_STRING);

      }else{
        $_SESSION['msg']=['página não encontrada'];
        header("Location:login.php");
      }

      if((!empty($usuario)) && (!empty($senha))){
        //para poder comparar com o valor que esta vindo do form      
      $resultado_usuario = "SELECT id, usuario, senha FROM usuario WHERE usuario='$usuario' LIMIT 1";
      $resultado_usuario = mysqli_query($conexao, $resultado_usuario);
      if($resultado_usuario){
        $row_usuario = mysqli_fetch_assoc($resultado_usuario);

        if(password_verify($senha, $row_usuario['senha'])){
         //se a senha for igual a salva no bd, vai abrir a tela de cadastro
         $_SESSION['id'] = $row_usuario['id'];
         $_SESSION['usuario'] = $row_usuario['usuario'];
         $_SESSION['senha'] = $row_usuario['senha'];
          header("Location: cadastro.php");
        }else{
          
          $_SESSION['msg'] = "<div class='alert alert-danger d-flex align-items-center' role='alert' position:'absolute'>
          <svg class='bi flex-shrink-0 me-2' width='24' height='24' role='img' aria-label='Danger:'>
            <use xlink:href='#exclamation-triangle-fill'/>
          </svg>
          <strong>ERRO! </strong> Você deve verificar alguns desses campos.
          <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
        
        </div>";
          header("Location: login.php");
        }
      
    }else{
      $_SESSION['msg'] = "<div class='alert alert-danger' role='alert'>ERRO 2!</div>";
      header("Location: login.php");
    }
  }else{
    $_SESSION['msg'] = "<div class='alert alert-danger' role='alert'>ERRO 3!</div>";
    header("Location: login.php");
  }
        

      ?>