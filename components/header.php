<?php require 'constantes.php'; ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">

    <title>Hospital</title>
</head>
<body>
    <header>
        <nav>
            <ul class="nav nav-tabs flex">
                <li class="nav-item item_nav">
                    <a class="nav-link active" href="<?php echo URL_FINAL; ?>index.php">Home</a>
                </li>
                <li class="nav-item item_nav">
                    <a class="nav-link " href="#">Administrador</a>
                </li>
                <li class="nav-item item_nav">
                    <a class="nav-link" href="#">Ingreso de hojas de vida</a>
                </li>
                <li class="nav-item item_nav">
                    <a class="nav-link" href="#">consulta de hojas de vida</a>
                </li>
                <li class="nav-item item_nav">
                    <a class="nav-link" href="#">actualización de hojas de vida</a>
                </li>
                <li class="nav-item item_nav">
                    <a class="nav-link" href="#">Reportes especiales</a>
                </li>
                <li class="nav-item item_nav">
                    <a class="nav-link" href="<?php echo URL_FINAL; ?>operaciones_Matematicas.php">Operaciones matemáticas</a>
                </li>
  
            </ul>
        </nav>
    </header>
