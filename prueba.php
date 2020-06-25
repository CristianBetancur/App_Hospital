<?php 

include('constantes.php');
include('components/header.php'); 


?>


<ul class="nav flex">
    <li class="nav-item item_nav">
        <a class="nav-link active" href="<?php echo URL_FINAL; ?>index.php">Home</a>
    </li>
    <li class="nav-item item_nav">
        <a class="nav-link active" href="#">Administrador</a>
    </li>
    <li class="nav-item item_nav">
        <a class="nav-link active" href="#">Ingreso de hojas de vida</a>
    </li>
    <li class="nav-item item_nav">
        <a class="nav-link active" href="#">consulta de hojas de vida</a>
    </li>
    
    <li class="nav-item item_nav">
        <a class="nav-link active" href="#">actualización de hojas de vida</a>
    </li>
    <li class="nav-item item_nav">
        <a class="nav-link" href="#">Reportes especiales</a>
    </li>
    <li class="nav-item item_nav">
        <a class="nav-link" href="<?php echo URL_FINAL; ?>operaciones_Matematicas.php">Operaciones matemáticas</a>
    </li>
    <li class="nav-item item_nav">
        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
    </li>
</ul>