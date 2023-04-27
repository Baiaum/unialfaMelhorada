<!DOCTYPE html>
<html lang="pt-br">
    <?php
        include "./php/config.php"
    ?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página inicial</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
        crossorigin="anonymous">
    </script>
    <script src="./js/jquery-3.6.4.js"></script>
    <script src="./js/script.js"></script>
    <link rel="stylesheet" href="./stylePagInicial.css">
   
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg bg-body-tertiary estilo">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">
                    <img class="logo" src="img/Logo_UNIALFA.png" alt="Logo_UNIALFA">
                    <img class="logo" src="img/Logo_FADISP.png" alt="Logo_FADISP">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item col-lg-5 ">
                            <div class="dropdown">
                                <a class="btn btn-secondary dropdown-toggle" href="#" role="button"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    Administrativo
                                </a>

                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">Auto Atendimento</a></li>
                                    <li><a class="dropdown-item" href="#">Aiversos</a></li>
                                    <li><a class="dropdown-item" href="#">Financeiro</a></li>
                                </ul>
                            </div>
                        </li>
                        <li class="nav-item col-lg-4">
                            <div class="dropdown">
                                <a class="btn btn-secondary dropdown-toggle" href="#" role="button"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    Acadêmico
                                </a>

                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">Diário</a></li>
                                    <li><a class="dropdown-item" href="#">Diário-Boletim</a></li>
                                    <li><a class="dropdown-item" href="#">Diário-Horário</a></li>
                                    <li><a class="dropdown-item" href="Academico/GradeRecomendada.html">Grade recomendada</a></li>
                                    <li><a class="dropdown-item" href="#">Registro de atividades</a></li>
                                    <li><a class="dropdown-item" href="#">TCC</a></li>
                                </ul>
                            </div>

                        </li>
                        <li class="nav-item col-lg-4">
                            <div class="dropdown">
                                <a class="btn btn-secondary dropdown-toggle" href="#" role="button"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    Comunicação
                                </a>

                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">Interatividade</a></li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="d-flex flex-column d-inline-block ">
                    <p class="descricao-aluno-nome mb-0"></p>
                    <p class="descricao-aluno-matricula mb-0">20221243052 | <a class="butao-sair" href="index.html">Sair</a></p>
                    <p class="descricao-aluno mb-0">V.22.10.28</p>
                    
                </div>
            </div>
        </nav>
        </div>
    </header>
    <main>
    <div class="left" > 
        <div class="atalhos">
        <p class="titulo">Atalhos </p><br>
        <a href="./Academico/diarioHorario.html">DIARIO-HORARIO</a>
        <a href="./Academico/GradeRecomendada.html">GRADE RECOMENDADA</a>
        <a href="./administrativo/financeiro.html">FINANCEIRO</a>
        <a href="https://alfaeducacao.telesapiens.com.br/my/courses.php" target="_blank">MOODLE</a>
    </div>
    <div class="avisos">
        <p class="titulo">Aviso </p><br>    
        <p>Estamos em semana de prova!</p>
    </div>
    <div class="videoMoti">
        <p class="titulo">Vídeo motivacional</p>
        <video src="./img/APRENDER EXIGE VONTADE _ MOTIVAÇÃO(720P_HD).mp4" poster="img/Capa_Video.png" controls autoplay muted style="width: 100%; align-content: center;">Vídeo motivacional</video>
    </div>
    </div>

    <div class="cursando">
    <h2 class="tituloCursando">Cursando</h2>
   

    <li>
        <p> <strong>ALGORÍTIMOS E ESTRUTURA DE DADOS I </strong> </p> 
        <img src="./img/foto perfil naka 50x50.png" alt="img professor">
        <p>Professor: Ricardo Andre Naka</p>
        <p>aula toda segunda das 18:50 a 22:00</p>
    </li>
    <br>
    <li>
        <p> <strong>DESENVOLVIMENTO DE SISTEMAS PARA INTERNET</strong> </p> 
        <img src="./img/foto perfil naka 50x50.png" alt="img professor">
        <p>Professor: Ricardo Andre Naka</p>
        <p>aula toda terça das 18:50 a 22:00</p>
    </li>

    <br>
    <li>
        <p> <strong>ENGENHARIA DE SOFTWARE </strong> </p> 
        <img src="./img/foto perfil naka 50x50.png" alt="img professor">
        <p>Professor: Ricardo Andre Naka</p>
        <p>aula toda quarta das 18:50 a 22:00</p>
    </li>
            
    </div>
    
</main>
</body>
</html>