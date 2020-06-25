
<?php 
    ini_set('display_errors', '1');
    ini_set('display_startup_errors', '1');
    error_reporting(E_ALL);    

    include('components/header.php'); 
?>

<div class="mathematical_operations">
    <form method="post" class="form_operations">

        <label for=""> Ingrece 2 numeros y luego selecione que operacion quiere hacer </label>
        <section class="operations_exercise1">
            <input type="number" name="1dig" placeholder="ingrece un numero" />
            <input type="number" name="2dig" placeholder="ingrece un numero" />
            <select name="operacion" id="operacion">
                <option type="text"  name="suma"> Suma </option>
                <option type="text"  name="resta"> Resta </option>
                <option type="text"  name="multiplicacion"> Multiplicacion </option>
                <option type="text"  name="divicion"> Division </option>
            </select>
            <input type="submit" name="Enviar">
        </section>
        <section>
            <label for="">El resultado de la operacion es <?php operation() ?></label>
        </section>
    <?php
        function operation(){
            if(isset($_POST['Enviar'])){
                
                $dig1 = $_POST['1dig'];
                $dig2 = $_POST['2dig'];
                $operador = $_POST['operacion'];
    
                if ($dig1 == $dig2) {
                    return 'Ambos Digitos ingresados tienen el mismo valor';
                }else if($dig1 > $dig2) {
                    return "$dig1 es mayor que $dig2";
                }else{
                    return "$dig1 es menor que $dig2";
                }
                
                if($operador == 'Suma'){
                    $resultado = $dig1 + $dig2;
                    return 'El resultado es: ' . $resultado;
                }else if($operador == 'Resta'){
                    $resultado = $dig1 - $dig2;
                    return 'El resultado es: ' . $resultado;
                }else if($operador == 'Multiplicacion') {
                    $resultado = $dig1 * $dig2;
                    return 'El resultado es: ' . $resultado;
                }else if($operador == 'Division') {
                    $resultado = $dig1 / $dig2;
                    return 'El resultado es: ' . $resultado;
                }
            }
        }
        for($i = 1; $i <= 15; $i ++ ){
            echo $i . " ";
        }
    ?>
    </form>
</div>

<?php    include('components/footer.php'); ?>
