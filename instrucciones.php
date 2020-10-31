<!DOCTYPE html>
<html lang="en">

<?php
    session_start();
    $_SESSION['edad'] = $_POST[edad];
    $_SESSION['sexo'] = $_POST[sexo];
    $_SESSION['genero_pref'] = $_POST[genMusical];
    $_SESSION['experiencia'] = $_POST[experiencia];
?>

<head>
  <meta charset="ISO-8859-1">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Prueba de Memoria R�tmica</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Bootslander - v2.2.0
  * Template URL: https://bootstrapmade.com/bootslander-free-bootstrap-landing-page-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>
    <main id="main">
        <!-- ======= Instrucciones ======= -->
        <section id="instrucciones" class="instrucciones">
            <div class="container">

                <div class="section-title" data-aos="fade-up">
                    <p>Instrucciones</p>
                </div>

                <div class="row">

                    <div class="col-lg-2">
                    </div>
                    <div class="col-lg-8" data-aos="fade-up" data-aos-delay="100">
                        <div class="icon-box" data-aos="zoom-in" data-aos-delay="100">
                            <div class="icon"><i class="bx bx-headphone"></i></div>
                            <h4 class="title">Use aud�fonos para una mejor experiencia de sonido y evitar ruido de fondo.</h4>
                        </div>
                        <div class="icon-box" data-aos="zoom-in" data-aos-delay="200">
                            <div class="icon"><i class="bx bx-volume-mute"></i></div>
                            <h4 class="title">Aseg�rese que est� en un lugar callado con la menor cantidad de ruido de fondo.</h4>
                        </div>
                        <div class="icon-box" data-aos="zoom-in" data-aos-delay="300">
                            <div class="icon"><i class="bx bx-timer"></i></div>
                            <h4 class="title">Reserve al menos 7 minutos de su tiempo para completar la prueba sin interrupciones.</h4>
                        </div>
                    </div>
                    <div class="col-lg-2">
                    </div>

                </div>

                <div class="row">

                    <div class="col-lg-2">
                    </div>
                    <div class="col-lg-8" data-aos="fade-up" data-aos-delay="100">
                        <div class="icon-box" data-aos="zoom-in" data-aos-delay="100">
                            <p class="description desktop-spacebar">En esta prueba usted tiene que tratar de copiar un ritmo lo m�s exactamente posible a los audios que va a escuchar, <strong>presionando la barra espaciadora de su teclado</strong>, en los momentos donde el audio toca una nota.</p>
                            <p class="description mobile-button">En esta prueba usted tiene que tratar de copiar un ritmo lo m�s exactamente posible a los audios que va a escuchar, <strong>presionando el bot�n en pantalla</strong>, en los momentos donde el audio toca una nota.</p>
                            <p class="description desktop-spacebar">Los audios solo se reproducir�n una sola vez por 8 segundos. Durante este tiempo no se registran pulsaciones del usuario, utilice este tiempo para acostumbrarse al ritmo. Luego de que termine de escuchar el audio, continue presionando la barra espaciadora, intentando mantener el mismo ritmo, hasta que el tiempo en pantalla llegue a cero.</p>
                            <p class="description mobile-button">Los audios solo se reproducir�n una sola vez por 8 segundos. Durante este tiempo no se registran pulsaciones del usuario, utilice este tiempo para acostumbrarse al ritmo. Luego de que termine de escuchar el audio, continue presionando el bot�n en pantalla, intentando mantener el mismo ritmo, hasta que el tiempo en pantalla llegue a cero.</p>
                        </div>
                    </div>
                    <div class="col-lg-2">
                    </div>

                </div>

                <div class="row desktop-spacebar">
                    <div class="col-lg-12 teclado d-flex justify-content-center align-items-stretch" data-aos="fade-up">
                    </div>
                </div>

                <div class="row mobile-button">
                    <div class="col-lg-12 boton d-flex justify-content-center align-items-stretch" data-aos="fade-up">
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12 text-center">
                        <img src="assets/img/mano.png" class="img-fluid animated" alt="" id="mano" style="height: 200px; width: 200px;">
                    </div>
                </div>

                <div class="row ">
                    <div class="col-lg-2">
                    </div>
                    <div class="col-lg-8">
                        <div class="icon-box">
                            <div class="icon play-prueba" id="play-prueba"><i class="bx bx-play-circle"></i></div>
                            <h4 class="title" style="text-align: justify">A modo de ejemplo, presione el icono de la izquierda e intente copiar el ritmo a como se explic� antes.</h4>
                        </div>
                    </div>
                    <div class="col-lg-2">
                    </div>
                </div>
                <br />
                <div class="row">
                    <div class="col-lg-2">
                    </div>
                    <div class="col-lg-8">
                        <div class="text-center">
                            <a href="test.html" class="btn-get-started scrollto" id="btn_comenzar">Comenzar prueba</a>
                        </div>
                    </div>
                    <div class="col-lg-2">
                    </div>
                </div>


                <div class="row" style="height: 200px;">
                </div>

            </div>
        </section><!-- End Contact Section -->

    </main>

    <audio class="sound" src="assets/audio/prueba.mp3" id="audio_prueba"></audio>

    <script>
        const prueba = document.getElementById("audio_prueba")
        let btn_prueba = document.getElementById("play-prueba")
        function reproducir_prueba() {
            btn_prueba.style.visibility = 'hidden';
            prueba.play();
            setTimeout(mostrar_play, 8000);
        };

        function mostrar_play() {
            btn_prueba.style.visibility = 'visible';
        };

        btn_prueba.addEventListener('click', reproducir_prueba);
    </script>

    <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>
    <div id="preloader"></div>

    <!-- Vendor JS Files -->
    <script src="assets/vendor/jquery/jquery.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>
    <script src="assets/vendor/venobox/venobox.min.js"></script>
    <script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
    <script src="assets/vendor/counterup/counterup.min.js"></script>
    <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
    <script src="assets/vendor/aos/aos.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>



</body>

</html>