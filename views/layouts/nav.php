<?php
require "url/url.php";
?>

<!doctype html>
<html lang="en">

<head>
    <title>SG Barber</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="views/img/favicon.ico" type="image/x-icon">

    <!-- Styles -->
    <link rel="stylesheet" href="views/styles/style.css">

    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/bdb35a6439.js" crossorigin="anonymous"></script>

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

</head>

<body>

    <header>

        <nav class="navbar navbar-expand-sm navbar-dark bg-dark ">
            <div class="container">
                <a class="navbar-brand" href="<?php $url ?>index.php">
                    <img class="logoNav" src="views/img/logo.png" alt="Logo">
                </a>
                <button class="navbar-toggler d-lg-none" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavId" aria-controls="collapsibleNavId" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="collapsibleNavId">
                    <ul class="navbar-nav me-auto mt-2 mt-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" href="<?php $url ?>servicios.php">Servicios</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php $url ?>reservas.php">Reservar</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php $url ?>barberos.php">Barberos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php $url ?>quienesSomos.php">¿Quienes somos?</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php $url ?>contactenos.php">Contactenos</a>
                        </li>
                    </ul>
                    <ul class="d-flex my-2 my-lg-0">
                        <button class="btn btn-outline-secondary my-2 my-sm-0" type="submit">Ingresar</button>
                    </ul>

                </div>
            </div>
        </nav>

    </header>

    <main>