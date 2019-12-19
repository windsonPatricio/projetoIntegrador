<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Avenger TUR</title>
    <link rel="stylesheet" href="Designer/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700">
    <link rel="stylesheet" href="Designer/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="Designer/fonts/ionicons.min.css">
    <link rel="stylesheet" href="Designer/css/Header-Blue.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.3.1/css/swiper.min.css">
    <link rel="stylesheet" href="Designer/css/Login-Form-Dark.css">
    <link rel="stylesheet" href="Designer/css/Projects-Horizontal.css">
    <link rel="stylesheet" href="Designer/css/Simple-Slider.css">
    <link rel="stylesheet" href="Designer/css/Social-Icons.css">
    <link rel="stylesheet" href="Designer/css/styles.css">
</head>

<body style="height: 1500px;">
   <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active"  style="height: 500px;">
                <img src="Designer/img/page1.jpg" class="d-block w-100" alt="100px">
            </div>
            <div class="carousel-item"  style="height: 500px;">
                <img src="Designer/img/page2.jpg" class="d-block w-100" alt="100px">
            </div>
            <div class="carousel-item" style="height: 500px;">
                <img src="Designer/img/page3.jpg" class="d-block w-100" alt="100px">
            </div>
        </div>
                <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
        </div>
    </div>
    <div class="projects-horizontal">
        <div class="container">
            <div class="intro">
                <h2 class="text-center">Pacotes Disponiveis</h2>
                <p class="text-center">Viaje com qualidade e com segurança com os melhores pacotes de viagem do Brasil </p>
            </div>

    <div class="row projects">
        <?php foreach($pacotes as $pacote){
            if($pacote->status!="Aprovado" ){ ?>

            <?php } else { ?>
                <div class="col-sm-6 item">
                    <div class="row">
                        <div class="col-md-12 col-lg-5"><a href="#"><img class="img-fluid" src="Designer/img/desk.jpg"></a></div>
                        <div class="col">
                            <h4 class="name"> Nome: <?=$pacote->nome?> </h4>
                            <h6 class="periodo"> Periodo: <?=$pacote->dataInicio , "à", $pacote->dataFim?> </h6>
                            <p class="description">Valor do Pacote: <b><?=$pacote->valorPacote?></b></p>
                            <a  class="btn btn-dark" href="\detalhar-pacote?id=<?=$pacote->id?>">Ver detalhes</a>
                        </div>
                    </div>
                </div>
             <?php } ?>
        <?php } ?>
            </div>
        </div>
    </div>

    <script src="Designer/js/jquery.min.js"></script>
    <script src="Designer/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.3.1/js/swiper.jquery.min.js"></script>
    <script src="Designer/js/Simple-Slider.js"></script>
</body>

</html>