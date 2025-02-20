<?php
require_once 'Crud/crud.php'
?>


<!DOCTYPE html>
<html lang="pt-Br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meus Projetos | Giovanni Benedetti</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="Css/projetos.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>

<body>
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
  <a href="index.php"><img src="Img/logo.png" alt=""></a> 
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
      <li class="nav-item">
          <a class="nav-link" href="index.php#about">About me</a>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="index.php#tecno">Technology</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="projetos.php">Projects</a>
        </li>
  
      </ul>
    
    </div>
  </div>
</nav>

    <div class="titulo">
        <h1>My Projects</h1>
    </div>



    
    <div class="container mt-5" >
        <div class="row justify-content-center">

        <?php
        $projetos=readAll($pdo, 'projetos');
        foreach ($projetos as $projeto){
               echo'<div class="col-md-6 col-lg-4">
                <div class="card card-custom">
                    <img src="Img/'.$projeto['imagem'].'" alt="Projeto" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title">'.$projeto['titulo'].'</h5>
                        <p class="card-text">'.$projeto['descricao'].'</p>
                        <div class="tags">';
                        if($projeto['id'] == 1)   {
                            echo '<span>HTML</span>
                                <span>CSS</span>
                                <span>Bootstrap</span>';
                        }elseif($projeto['id'] == 2) {
                            echo '<span>HTML</span>
                            <span>CSS</span>';
                        }elseif($projeto['id'] == 3) {
                            echo '<span>HTML</span>
                                <span>CSS</span>
                                ';
                        }elseif($projeto['id'] == 4) {
                            echo '<span>PHP</span>
                                <span>HTML</span>
                                <span>CSS</span>
                                <span>Bootstrap</span>
                                <span>JavaScript</span>
                                <span>Mysql</span>';
                        }elseif($projeto['id'] == 5) {
                            echo '<span>HTML</span>
                            <span>CSS</span>
                            <span>PHP</span>
                            <span>Bootstrap</span>
                            
                            ';
                        }
                        echo'</div>
                        <div class="containerbotao">
                        <a href="'.$projeto['deploy'].'" target="blank" class="botao">Ver projeto</a>
                       <a href="'.$projeto['github'].'" target="blank"><i class="bi bi-github"></i></a> 
                        </div>
                        
                    </div>
                </div>
            </div>' ;
        }
    

            ?>
            
        </div>
    </div>


   
    <footer class="footer">
      <p>&copy; Todos os Direitos Reservados. Giovanni Benedetti. Desenvolvido por GB </a></p>
   
  </footer>


    
   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>
