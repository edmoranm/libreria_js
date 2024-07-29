<?php include_once '../../includes/header.php'; ?>

  <!-- Hero Section -->
  <div class="encabezado">
        <h1>LIBRERIA EDISA</h1>
        <p>DE TODO PARA TODOS</p>
        <P>HACIENDO HISTORIA EN LA EDUCACION</P>
    </div>

    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
        <ol class="carousel-indicators">
            <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"></li>
            <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"></li>
            <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"></li>
            <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="../../images/LOGO.png" class="d-block w-100" alt="Libro 1">
            </div>
            <div class="carousel-item active">
                <img src="../../images/img1.jpg" class="d-block w-100" alt="Libro 1">
            </div>
            <div class="carousel-item">
                <img src="../../images/img2.png" class="d-block w-100" alt="Libro 2">
            </div>
            <div class="carousel-item">
                <img src="../../images/img3.jpeg" class="d-block w-100" alt="Libro 3">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Anterior</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Siguiente</span>
        </a>
    </div>

    <!-- Contenido principal -->
    <div class="container mt-5">
        <h2>Libros Destacados</h2>
        <div class="row">
            <div class="col-md-4">
                <div class="card mb-4">
                    <img src="../../images/img6.jpeg" class="card-img-top" alt="Libro Destacado 1">
                    <div class="card-body">
                        <h5 class="card-title">CUADERNOS</h5>
                        <p class="card-text">Cuadernos de diferentes marcas, espiral y con costura</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card mb-4">
                    <img src="../../images/img7.jpg" class="card-img-top" alt="Libro Destacado 2">
                    <div class="card-body">
                        <h5 class="card-title">LAPICEROS</h5>
                        <p class="card-text">Lapiceros Profesionales</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card mb-4">
                    <img src="../../images/img8.jpeg" class="card-img-top" alt="Libro Destacado 3">
                    <div class="card-body">
                        <h5 class="card-title">CRAYONES</h5>
                        <p class="card-text">Para hacer tus tareas mas creativas</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="../../src/js/script.js"></script> 
    <?php include_once '../../includes/footer.php' ?>

