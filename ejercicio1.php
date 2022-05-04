<?php
$mivariable = 'hola mundo';
$mivariable2 = 4;



echo $mivariable2+6;
print($mivariable);
print_r($mivariable);

?>
<br>
<?php
$holamundo = "hola mundo" ;
$holamundo2 = "hola mundo 2" ;
echo $holamundo.' '.$holamundo2;

?>
<br>
<html>
    <head>
        <title>
            Ejercicio 01
        </title>
</head>
<body>
    <form method="get" action="">
        Ingresar Valor 1 <br><input type="text" name="valor1"><br>
        Ingresar Valor 2 <br><input type="text" name="valor2"><br>
        Resultado <br><input type="submit" value="Suma"><br>
</form>
<?php
if(isset($_GET['valor1']))
$numero1=$_GET['valor1'];
if(isset($_GET['valor2']))
$numero2 =$_GET['valor2'];
if(isset($numero1) && isset($numero2)){
$suma = $numero1 * $numero2;
echo "El resultado de la suma es :" .$suma;
}
?>
</body>
    </html>

