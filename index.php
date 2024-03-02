<!doctype html>
<html lang="pt-br">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

        <title>Agenda Contatos</title>
    </head>
    <body>
        <div class="container">
            <!-- Inicio do NavBar -->
            <ul class="nav">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contatos.php">Contatos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="cidades.php">Cidades</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="tipodecontatos.php">Tipos de Contatos</a>
                </li>
            </ul>  
            <!-- fim do navbar -->

            <!-- Inicio slider -->
            <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <!-- botão para mudar de um slide para o outro -->
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 3"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="4" aria-label="Slide 4"></button>  
                    <!-- fim do codigo para mudar de slide-->
                </div>

                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="img/iphone-g9dcc5d486_1280.jpg" class="d-block w-60" alt="Slider imagem 1">
                    </div>
                    <div class="carousel-item">
                        <img src="img/notebook-gdbf39534d_1280.jpg" class="d-block w-60" alt="Slider imagem 2">
                    </div>
                    <div class="carousel-item">
                        <img src="img/planning-g4dde13bd2_1280.jpg" class="d-block w-60" alt="Slider imagem 3">                 
                    </div>
                    <div class="carousel-item">
                        <img src="img/town-gfd8c5bd72_1280.jpg" class="d-block w-60" alt="Slider imagem 4">                   
                    </div>
                    <div class="carousel-item">
                        <img src="img/woman-gd4a78bab4_1280.jpg" class="d-block w-60" alt="Slider imagem 5">         
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
            <!-- Fim do slider -->

            <!-- Inicio do Footer (rodapé)-->
            <footer>
                <div class="alert alert-secondary" role="alert">
                    <center>  
                        <strong>Agenda de contatos</strong> .:. Desenvolvido por Vinícius .:. Direitos Reservados &COPY;
                    </center>    
                </div>
            </footer>
            <!-- fim do Footer -->
        </containner>


        <!-- Optional JavaScript; choose one of the two! -->

        <!-- Option 1: Bootstrap Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

        <!-- Option 2: Separate Popper and Bootstrap JS -->
        <!--
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
        -->
</body>
</html>