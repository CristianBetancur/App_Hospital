
<?php 
    ini_set('display_errors', '1');
    ini_set('display_startup_errors', '1');
    error_reporting(E_ALL);    

    include('components/header.php'); 
?>

<div>
    <form method="post">

        <label for=""> Ingrece 2 numeros y luego selecione que operacion quiere hacer </label>

        <input type="number" name="1dig" placeholder="ingrece un numero" />
        <input type="number" name="2dig" placeholder="ingrece un numero" />
        <select name="operacion" id="operacion">
            <option type="text"  name="suma"> Suma </option>
            <option type="text"  name="resta"> Resta </option>
            <option type="text"  name="multiplicacion"> Multiplicacion </option>
            <option type="text"  name="divicion"> Division </option>
        </select>
        <input type="submit" name="Enviar">
    </form>
    <?php
        
        if(isset($_POST['Enviar'])){
            $dig1 = $_POST['1dig'];
            $dig2 = $_POST['2dig'];
            $operador = $_POST['operacion'];

            if($operador == 'Suma'){
                $resultado = $dig1 + $dig2;
                echo 'El resultado es: ' . $resultado;
            }else if($operador == 'Resta'){
                $resultado = $dig1 - $dig2;
                echo 'El resultado es: ' . $resultado;
            }else if($operador == 'Multiplicacion') {
                $resultado = $dig1 * $dig2;
                echo 'El resultado es: ' . $resultado;
            }else if($operador == 'Division') {
                $resultado = $dig1 / $dig2;
                echo 'El resultado es: ' . $resultado;
            }
        }
        

    ?>
</div>

<?php    include('components/footer.php'); ?>
