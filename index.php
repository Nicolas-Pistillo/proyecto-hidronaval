<?php
    require "shared/header.php";
?>

<div class="lightbox-container">

    <span class="material-icons close-lightbox">
    clear
    </span>

    <div class="container lightbox-data">
        <div class="lightbox-info p-4">
            <h3>Polaris</h3>
            <span class="work-date">22/03/2013</span>
            <hr>
            <p class="work-description m-0">Este es uno de los trabajos posta, pero todavia no tengo la descripcion ni la de los demas, mi viejo iba a conseguir la data.</p>
        </div>
    </div>

    <div class="container lightbox-tab mb-4 flex-wrap">
        <div class="img-work-container">
            <img src="css\img\galeria-trabajos\img-polaris.png" class="img-work work-selected" alt="img-polaris">
        </div>

        <div class="img-work-container">
            <img src="css\img\galeria-trabajos\Rubimar.jpg" class="img-work" alt="img-rubimar">
        </div>

        <div class="img-work-container">
            <img src="css\img\galeria-trabajos\San Julian.JPG" class="img-work" alt="img-san-julian">
        </div>

        <div class="img-work-container">
            <img src="css\img\galeria-trabajos\San Matias.JPG" class="img-work" alt="img-san-matias">
        </div>
    </div>
</div>

<header class="header-container position-relative">
    <nav class="main-nav navbar navbar-expand-lg navbar-dark">
        <div class="container">
            <a class="navbar-brand" href="index.php">
                <img src="css/img/img-logo-light.svg" height="60px" alt="img-logo-hidronaval">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.php">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#nosotros">Nosotros</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#instructor">Instructor</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#cursos">Cursos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contacto">Contacto</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="sesion btn rounded-3">Iniciar Sesion</a>
                    </li>
                </ul>
            </div>
        </div><!--FIN DIV CONTAINER-->
    </nav>
    <div class="container h-80">
        <div class="row align-items-center h-80">
            <div class="col-sm-12 col-md-8 col-lg-6 text-center text-md-start">
                <h1>Cursos de <br>Oleohidraulica Naval</h1>
                <p>Hemos diseñado cursos de Oleohidráulica. Si quieres conocer más sobre Olehidráulica, te ofrecemos una
                    Introducción <b>GRATIS</b>.</p>
                <form>
                    <div class="input-group mb-3">
                        <!--<label class="visually-hidden" for="email">email</label> Label asociado al input pero al habilitarlo quita el borde redondeado de la izquierda-->
                        <input type="email" name="email" class="email-info form-control" placeholder="Introduce tu correo electronico" aria-describedby="box-send">
                        <span class="input-group-text" id="box-send">
                            <input class="send-email" type="submit" value="Solicitar Curso">
                        </span>
                    </div>
                </form>
            </div>
        </div>
    </div>
</header>

<!-----------------------------CARDS COLLECTION----------------------------->

<?php
    include_once './sections/index-sections/cards-collection.php';
?>

<main>
    <div class="container">
<!-----------------------------NOSOTROS----------------------------->
    <?php
    include_once './sections/index-sections/nosotros.php';
    ?>
<!-----------------------------TABS CONTENIDOS----------------------------->
    <?php
    include_once './sections/index-sections/tab-information.php';
    ?>
    </div><!-- End Container -->
<!-----------------------------INSTRUCTOR----------------------------->
    <?php
    include_once './sections/index-sections/instructor.php';
    ?>
<!-----------------------------PRICING----------------------------->
    <div class="container">
    <?php
    include_once './sections/index-sections/princing.php';
    ?>
<!-----------------------------TESTIMONIOS----------------------------->
    <?php
    include_once './sections/index-sections/testimonios.php';
    ?>
    </div>
<!-----------------------------CONTACTO----------------------------->
    <div class="container-fluid p-0">
        <?php
        include_once './sections/index-sections/contacto.php';
        ?>
    </div>

    
</main>

<!---------------------------SKEW-PRE-FOOTER----------------------------->

<!-----------------------------FOOTER----------------------------->
<?php
require "shared/footer.php";
