</main>
<br><br>
<head>
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

    <div class="social-icons">
        <a href="hhthth"><i class="icon ion-social-twitter"></i></a>
        <a href="#"><i class="icon ion-social-facebook"></i></a>
        <a href="#"><i class="icon ion-social-snapchat"></i></a>
        <a href="#"><i class="icon ion-social-youtube"></i></a>
    </div>

<script src="Designer/js/jquery.min.js"></script>
<script src="Designer/bootstrap/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.3.1/js/swiper.jquery.min.js"></script>
<script src="Designer/js/Simple-Slider.js"></script>
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="https://igorescobar.github.io/jQuery-Mask-Plugin/js/jquery.mask.min.js"></script>
<script>
    function formatar(mascara, documento){
        var i = documento.value.length;
        var saida = mascara.substring(0,1);
        var texto = mascara.substring(i)

        if (texto.substring(0,1) != saida){
            documento.value += texto.substring(0,1);
        }
    }
</script>
</html>