<html>
<head>
    <title>Calculo de sueldos y beneficios</title>
</head>
<body>
        <form method="post" action="">
        Importe total vendido:<br>  <input type="text" name="valor1"><br>
        Cantidad de hijos:<br>  <input type="text" name="valor2"><br>
        Resultado :<br>
        <input type="submit" name="Consultar" value="Consultar">

        </form>
<?php
    $valor1=$_POST['valor1'];
    $valor2=$_POST['valor2'];
        $comi=$valor1 *0.075;
        $boni=$valor2 *50;
        $sbruto=600 +$comi +$boni;
        $once=$sbruto *0.11;
        $neto=$sbruto -$once;

        echo "Su comisón es  : ".$comi;
        echo ("<br>");       
        echo "Su bonificación es  : ".$boni; 
        echo ("<br>");         
        echo "Su sueldo bruto es  : ".$sbruto;
        echo ("<br>");      
        echo "DESCUENTO  : ".$once;
        echo ("<br>");  
        echo "Su sueldo neto es  : ".$neto;

?>
</body>
</html>