<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="../src/css/">
    <title>App de Libreria - CRUDJS</title>
</head>
<style>
/* css/style.css */
body {
    background-color: #e9ecef; /* Color de fondo más claro */
    font-family: 'Roboto', sans-serif;
    color: #212529;
    margin: 0;
    padding: 0;
}

/* Estilo para el navbar */
.navbar {
    margin-bottom: 20px;
    background-color: #343a40; /* Fondo oscuro para el navbar */
    border-bottom: 2px solid #495057; /* Borde más marcado en la parte inferior */
}


.navbar-brand:hover {
    color: #f8f9fa; /* Color blanco más claro al pasar el mouse */
}



.navbar-nav .nav-link:hover {
    color: #007bff; /* Color azul al pasar el mouse */

}




/* Estilo para el carrusel */
.carousel {
    position: relative;
    overflow: hidden;
}

.carousel-item {
    height: 50vh; /* Ajusta la altura del carrusel */
}

.carousel-item img {
    width: 100%;
    height: 100%; /* Ajusta la altura para ocupar todo el contenedor */
    object-fit: cover; /* Asegura que la imagen cubra el espacio */
    transition: transform 1s ease;
}

/* Efecto de zoom en hover */
.carousel-item img:hover {
    transform: scale(1.1); /* Efecto de zoom en hover */
    filter: brightness(80%); /* Efecto de filtro en hover */
}

/* Estilo del contenedor */
.container {
    margin-top: 30px;
}

/* Estilo de las tarjetas */
.card {
    display: flex;
    flex-direction: column; /* Asegura que el contenido se ajuste verticalmente */
    justify-content: space-between; /* Distribuye el espacio de manera uniforme */
    height: 100%; /* Asegura que la tarjeta ocupe todo el espacio disponible */
    border-radius: 15px; /* Bordes redondeados en las tarjetas */
    overflow: hidden; /* Oculta cualquier contenido fuera de los bordes redondeados */
    transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.card img {
    width: 100%;
    height: 200px; /* Altura fija para las imágenes en las tarjetas */
    object-fit: cover; /* Asegura que la imagen cubra el espacio */
}

.card-body {
    padding: 15px;
    display: flex;
    flex-direction: column;
    flex-grow: 1; /* Permite que el contenido crezca para llenar el espacio */
}

.card-title {
    font-size: 1.25rem;
    margin-bottom: 10px;
}

.card-text {
    flex: 1; /* Permite que el texto se expanda */
}

.card:hover {
    transform: translateY(-10px); /* Efecto de elevación al pasar el mouse */
    box-shadow: 0 8px 16px rgba(0, 0, 0, 0.3);
}

/* Estilo del footer */
.footer {
    background-color: #343a40; /* Color oscuro para el footer */
    color: white;
    text-align: center;
    padding: 20px;
    position: relative;
    bottom: 0;
    width: 100%;
}

/* Estilo del hero section */
.encabezado {
    background-color: gray;
    background-size: cover;
    color: white;
    padding: 50px 0;
    text-align: center;
    position: relative;
    overflow: hidden;
}

.hero h1 {
    font-size: 4rem;
    margin-bottom: 20px;
    z-index: 2;
    position: relative;
    animation: fadeInUp 1.5s ease-out;
    color: #f8f9fa; /* Color blanco claro para el título */
}

.hero p {
    font-size: 1.25rem;
    max-width: 700px;
    margin: 0 auto;
    z-index: 2;
    position: relative;
    color: #f8f9fa; /* Color blanco claro para el texto */
}

@media (max-width: 768px) {
    .hero h1 {
        font-size: 2.5rem;
    }

    .hero p {
        font-size: 1rem;
    }
}

/* Animaciones */
@keyframes fadeInUp {
    from {
        opacity: 0;
        transform: translateY(20px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}


</style>


<body>

<?php include_once 'navbar.php' ?>