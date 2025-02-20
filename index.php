<?php
require_once 'Crud/crud.php'
  ?>

<!DOCTYPE html>
<html lang="pt-Br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Currículo | Giovanni Buscarino Benedetti</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" href="Css/PaginaInicial.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

</head>

<body>
  <nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
      <a href="index.php"><img src="Img/logo.png" alt=""></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link" href="#about">Sobre mim</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#tecno">Tecnologia</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="projetos.php">Projetos</a>
          </li>

        </ul>

      </div>
    </div>
  </nav>

  <div class="FundoIntro">
    <div class="Perfil">
      <img class="FotoPerfil" src="Img/Perfil.jpg" alt="">
    </div>
    <div class="Nome">
      <h1>Giovanni Benedetti</h1>
      <p>Developer Full Stack Jr. | HTML | CSS | PHP | JavaScript | MySql</p>
    </div>
    <div class="icones">
      <a href="https://www.instagram.com" target="blank"><i class="bi bi-instagram"></i></a>
      <a href="https://www.linkedin.com/in/giovanni-buscarino-benedetti-7a92a9326/" target="blank"><i
          class="bi bi-linkedin"></i></a>
      <a href="https://github.com/GiovanniBBenedetti" target="blank"><i class="bi bi-github"></i></a>
    </div>
  </div>


  <div class="Conteúdo" id="about">
    <div class="sobremim">
    
         <h1>Sobre mim</h1>    


    </div>

    <div class="textosobremim">
      <?php

$sobre = read($pdo, 'Curriculo', );

      echo '<p>' . $sobre['Aboutme'] . '</p>'
        ?>
    </div>
  </div>






  <section class="habilidades" id="tecno">
    <div class="tecnologia">
      <div class="titulo">

        <h1>Tecnologias</h1>
      </div>
      <div class="tecnologias row">
        <?php
        $habilidades = readALL($pdo, 'Habilidades', );
        foreach ($habilidades as $habilidade) {
          if( $habilidade['tecnologia'] == 'Premiere' || $habilidade['tecnologia'] == 'Photoshop'){
            echo '
  <div class="col-sm-6 col-md-4 col-lg-3">
    <div class="card" id="premiere">
      <img src="Img/' . $habilidade['imagem'] . '" alt="icone html">
      <p>' . $habilidade['tecnologia'] . '</p>
    </div>
  </div>';
        }else{
          echo '
          <div class="col-sm-6 col-md-4 col-lg-3">
            <div class="card">
              <img src="Img/' . $habilidade['imagem'] . '" alt="icone html">
              <p>' . $habilidade['tecnologia'] . '</p>
            </div>
          </div>';
        }
          }
         
        

        ?>


      </div>
    </div>
  </section>


  <div class="titulo">
    <h1>Fale Comigo</h1>
  </div>

  <div class="faleComiogo">
    <form class="formulario">
      <input type="text" placeholder="Nome" required>
      <input type="email" placeholder="Email" required>
      <textarea placeholder="Mensagem" required></textarea>
      <button type="submit">ENVIAR</button>
    </form>

  </div>



  <footer class="footer">
    <p>&copy; Todos os Direitos Reservados. Giovanni Benedetti. Desenvolvido por GB </a></p>
  </footer>



  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>
</body>



</html>