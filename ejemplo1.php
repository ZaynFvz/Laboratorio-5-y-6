<html>
<head>
    <title>Ejercicio 1 - Operaciones con PHP</title>
</head>
<body>
        <form method="post" action="">
        Ingresar el valor 1:<br>  <input type="text" name="valor1"><br>
        Ingresar el valor 2:<br>  <input type="text" name="valor2"><br>
        Resultado :<br>
        <input type="submit" name="Suma" value="Suma">

        </form>
<?php
//declaración de variables
    $numero1=$_POST['valor1'];
    $numero2=$_POST['valor2'];
        $suma=$numero1 +$numero2;
        echo "El resultado de la Suma es  : ".$suma;
?>
</body>
</html>