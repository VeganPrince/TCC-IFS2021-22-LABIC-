<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="./img/favicon (5).ico" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css2?family=Mohave:wght@500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./CSS/index1.css">

    <title>LABIC</title>
</head>

<body class="site">

    <div class="container">
        <header>
            <img src="./img/Logo - LABIC (site).png" alt="logo_LABIC" id="logo">
            <h1 id="logo_text">Laboratório de Inovação e Criatividade.</h1>

            <?php
            session_start();

            if (isset($_SESSION['tipo_pesq']) && $_SESSION['tipo_pesq'] == 1) {
                if (isset($_SESSION['id_pesq']) && $_SESSION['id_pesq']) {
                    echo " <nav id=\"nav\">
                    <button id=\"btn-menu\" aria-expanded=\"false\">Menu
    
                        <span id=\"hamb\"></span>
                    </button>
                    <ul id=\"menu-ul\">
                        <li>
                            <a href=\"./pesquisadores.php\" class=\"pages\">Pesquisadores</a>
                        </li>
                        <li>
                            <a href=\"./projetos.php\" class=\"pages\">Projetos</a>
                        </li>
                        <li>
                            <a href=\"./comunicacao.html\" class=\"pages\">Comunicação</a>
                        </li>
                        <li>
                            <a href=\"./deferimento_de_cadastro.php\" class=\"pages\">Deferimento de Cadastro</a>
                        </li>
                        <li>
                            <a href=\"./equipe.html\" class=\"pages\">Equipe</a>
                        </li>
                        <li>
                            <a href=\"./feedback.html\" class=\"pages\">Feedback</a>
                        </li>
                        <li>
                            <a href=\"./PHP/logout.php?token=" . md5(session_id()) . "\" class=\"pages\">SAIR</a>
                        </li>
                    </ul>
                </nav> ";
                } else {
                    echo "   <div class=\"botoes\">
                    <a href=\"./login.php\" class=\"link\">Entrar</a>
                </div> ";
                }
            } else if (isset($_SESSION['tipo_pesq']) && $_SESSION['tipo_pesq'] == 2) {
                if (isset($_SESSION['id_pesq']) && $_SESSION['id_pesq']) {
                    echo " <nav id=\"nav\">
                    <button id=\"btn-menu\" aria-expanded=\"false\">Menu
    
                        <span id=\"hamb\"></span>
                    </button>
                    <ul id=\"menu-ul\">
                        <li>
                            <a href=\"./pesquisadores.php\" class=\"pages\">Pesquisadores</a>
                        </li>
                        <li>
                            <a href=\"./projetos.php\" class=\"pages\">Projetos</a>
                        </li>
                        <li>
                            <a href=\"./comunicacao.html\" class=\"pages\">Comunicação</a>
                        </li>
                        <li>
                            <a href=\"./relatorio.html\" class=\"pages\">Relatório</a>
                        </li>
                        <li>
                            <a href=\"./equipe.html\" class=\"pages\">Equipe</a>
                        </li>
                        <li>
                            <a href=\"./PHP/logout.php?token=" . md5(session_id()) . "\" class=\"pages\">SAIR</a>
                        </li>
                    </ul>
                </nav> ";
                } else {
                    echo "   <div class=\"botoes\">
                    <a href=\"./login.php\" class=\"link\">Entrar</a>
                </div> ";
                }
            } else {
                echo "   <div class=\"botoes\">
                <a href=\"./login.php\" class=\"link\">Entrar</a>
            </div> ";
            }
            ?>
        </header>
        <main>

            <div class="site-content">
                <div class="fundo">

                    <div>
                        <link href="CarrosselStyle.css" rel="stylesheet" type="text/css">
                        <link href="CarrosselAnimation.css" rel="stylesheet" type="text/css">

                        <main class="main" id="mae">
                            <section class="galery">
                                <div class="fotos">

                                    <img src="img/1.png" alt="Foto1">
                                    <img src="img/2.png" alt="Foto2">
                                    <img src="img/3.png" alt="Foto3">
                                    <img src="img/4.png" alt="Foto4">


                                </div>
                        </main>

                        <style>
                            .galery {
                                border-radius: 10px;
                                width: 1000PX;
                                height: 850px;
                                /*1280x720*/
                                background-color: #add8e600;
                                overflow: hidden;
                            }

                            .galery .fotos {
                                width: 500%;
                                animation-name: animacao;
                                animation-duration: 30s;
                                animation-iteration-count: infinite;
                            }

                            .galery .fotos img {

                                width: 20%
                            }

                            .main {
                                display: flex;
                                align-items: center;
                                justify-content: center;
                                background-color: rgba(0, 0, 0, 0);

                            }




                            @keyframes animacao {
                                0% {
                                    margin-left: 0;
                                }

                                20% {
                                    margin-left: 0;
                                }

                                25% {
                                    margin-left: -100%;
                                }

                                45% {
                                    margin-left: -100%;
                                }

                                50% {
                                    margin-left: -200%;
                                }

                                70% {
                                    margin-left: -200%;
                                }

                                75% {
                                    margin-left: -300%;
                                }

                                95% {
                                    margin-left: -300%;
                                }

                                100% {
                                    margin-left: -400%;
                                }
                            }
                        </style>

                    </div>


                    <div id="informacoes">
                        <div class="informacoes-title">
                            <h2>Um pouco sobre o LABIC:</h2>
                        </div>

                        <div class="informacoes-content">

                            <div class="informacoes">
                                <h3>Valores:</h3>
                                <p>Ser reconhecido por colaborar na qualidade e confiabilidade no desenvolvimento acadêmico, pessoal e profissional de cada pesquisador.</p>
                            </div>

                            <div class="informacoes">
                                <h3>Visão:</h3>
                                <p>Acreditamos no diálogo e na troca de experiências; Aprendemos com os erros e cultivamos um ambiente de tolerância; Valorizamos pensamentos diferentes; Acreditamos na democracia e na humanidade; Acreditamos que cada um de
                                    nós tem direitos inegóciáveis e que é possivel conviver em paz nesse planeta. </p>
                            </div>

                            <div class="informacoes">
                                <h3>Missão:</h3>
                                <p>Oferecer um lugar para compartilhar conhecimento, idéias, fazer amigos e se diverti</p>
                            </div>

                        </div>

                    </div>
                </div>



                <div id="div_localizacao">

                    <article>
                        <h3 id="title_localizacao">Encontre o LABIC:</h3>
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3917.324874729514!2d-37.659167285804514!3d-10.938813625254983!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x71022f007f6450f%3A0x2383c966272a8800!2sInstituto%20Federal%20de%20Educa%C3%A7%C3%A3o%2C%20Ci%C3%AAncia%20e%20Tecnologia%20de%20Sergipe%20-%20IFS%20-%20Campus%20Lagarto!5e0!3m2!1spt-BR!2sbr!4v1637847656633!5m2!1spt-BR!2sbr" style="border: 0;" allowfullscreen="" loading="lazy" id="localizacao"></iframe>
                    </article>
                </div>
            </div>
    </div>
    </main>
    <footer>
        <div class="links_footer">
            <a href="https://www.facebook.com/LABIC-Inovac%CC%A7a%CC%83o-e-Criatividade-101912908271425" target="_blank" id="facebook"> <img src="./img/facebook.png" alt="facebook" class="logos"></a>
            <a href="https://www.instagram.com/labic.ifs/" target="_blank" id="instagram"><img src="./img/instagram.png" alt="instagram" class="logos"></a>
            <a href="https://www.youtube.com/channel/UC8Rb7wcBU_q-2vIO3qB2RYw" target="_blank" id="youtube"> <img src="./img/youtube (1).png" alt="logo_yt" class="logos">
            </a>
        </div>
        <div class="creditos">
            <p>Developed by Alexandre Dantas and Elysabethe Wiliane.</p>
        </div>
    </footer>



    <script type="tetx/javascript" src="../JS/index.js"></script>

    <script src="./JS/index1.js"></script>
</body>

</html>