<?php
    require "shared/header.php";
?>

<div class="lightbox-container">

    <span class="material-icons close-lightbox">
    clear
    </span>

    <div class="container lightbox-data">

        <div class="lightbox-info p-4">
            
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
        <div class="text-center">
            <div class="data-teacher">
                <p class="decorators mb-1">Instructor</p>
                <h5>Docente con años de experiencia impartiendo clases y trabajando en el campo de la Oleohidráulica.</h5>
            </div>
        </div>
    </div><!--fin container-->
<!-----------------------------INSTRUCTOR----------------------------->
    <div class="container-fluid instructor2">

    <?php
    include_once './sections/index-sections/instructor.php';
    ?>

    </div>
<!-----------------------------PRICING----------------------------->
    <div class="container">
    <?php
    include_once './sections/index-sections/princing.php';
    ?>
<!-----------------------------TESTIMONIOS----------------------------->
    <?php
    include_once './sections/index-sections/testimonios.php';
    ?>
<!-----------------------------CONTACTO----------------------------->
    
    <?php
    include_once './sections/index-sections/contacto.php';
    ?>

    </div>
</main>

<!---------------------------SKEW-PRE-FOOTER----------------------------->

<div class="skew-contact"></div>

<!-----------------------------FOOTER----------------------------->
<?php
require "shared/footer.php";
