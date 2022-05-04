<html>
<head>
    <title>Rebajas en gaseosas</title>
</head>
<body>
        <form method="post" action="">
        Precio actual de la gaseosa:<br>  <input type="text" name="valor1"><br>
        Cantidad de unidades:<br>  <input type="text" name="valor2"><br>
        Resultado :<br>
        <input type="submit" name="Consultar" value="Consultar">

        </form>
<?php
    $valor1=$_POST['valor1'];
    $valor2=$_POST['valor2'];
        $rebaja=$valor1 *0.05;
        $nprecio=$valor1 -$rebaja;
        $icompra=$nprecio *$valor2;
        $idesc=$icompra *0.07;
        $ipagar=$icompra -$idesc;
        $caramelo=$valor2 *2;

        echo "El nuevo precio es  : ".$nprecio;
        echo ("<br>");       
        echo "Importe de compra  : ".$icompra; 
        echo ("<br>");         
        echo "Importe del descuento  : ".$idesc;
        echo ("<br>");      
        echo "Importe a pagar  : ".$ipagar;
        echo ("<br>");  
        echo "Le regalaremos   ".$caramelo ." caramelos";

?>
</body>
</html>