<?php

//include "empleado.php";
include "empleadoporcomision.php";
$objempleadoporcomision = new empleadoporcomision ("Maria","Perez",15000,10);
$objEmpleado = new empleado ("Juan","Perez",200000);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=>, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php
    echo "El señor".$objEmpleado->getNombre(). " ". $objEmpleado->getApellido()." Se gana ". $objEmpleado->getSalario()."<br>";
    echo "El selor ".$objempleadoporcomision->getNombre(). " ". $objempleadoporcomision->getApellido()."se gana ". $objempleadoporcomision->getSalario();
    ?>
</body>
</html>