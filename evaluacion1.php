
<?php
/*Realice una aplicación que calcule el salario neto a pagar los empleados
de una Empresa. Dicha empresa realiza los siguientes descuentos.

ISSS (9%)
AFP (7%)
Renta (10%) - Se aplica, si el salario base es mayor a $ 472.00.

La aplicación debe pedir nombre, apellido y el salario base del empleado, mostrar
el salario neto y los descuentos respectivos.
*/

$nombre = '';
$apellido ='';
$salariobase= 0;
$descuento1 = 0 ;
$descuento2 = 0;
$descuento3 = 0;
$sueldoneto = 0 ;


if (isset($_POST['enviar'])){
    $nombre =$_POST['nombre'];
    $apellido =$_POST['apellido'];
    $salariobase =$_POST['salariobase'];

    $descuento1=$salariobase *0.09;
    $descuento2=$salariobase *0.07;

    if($salariobase > 472){

    $descuento3= $salariobase *0.10;
    }

    
    $sueldoneto=$salariobase-($descuento1+$descuento2+$descuento3);
}
?>


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EVALUACION 1</title>
</head>
<body>

<form action="evaluacion1.php" method = "POST">
    <label for="nombre">Nombre</label>
    <input type="text" id= "nombre" name="nombre" placeholder = "Escriba su Nombre">
    <label for="apellido">Apellido</label>
    <input type="text" id= "apellido" name="apellido" placeholder = "Escriba su Apellido">
    <label for="salariobase">salariobase</label>
    <input type="num" id= "salariobase" name="salariobase" placeholder="Ingrese su Salario">
    <button type= "submit" name="enviar" id="enviar">Calcular el Salario</button>
</form>
<br>
<table border="1">

<caption>DATOS SUELDO EMPLEADOS</caption>
<thead>
    <th>NOMBRE</th>
    <th>APELLIDO</th>
    <th>SALARIO BASE</th>
    <th>ISSS</th>
    <th>AFP</th>
    <th>RENTA</th>
    <th>SUELDO NETO</th>
</thead>
<tbody>
<td> <?php echo $nombre; ?></td>
<td> <?php echo $apellido; ?></td>
<td> <?php echo $salariobase; ?></td>
<td> <?php echo $descuento1; ?></td>
<td> <?php echo $descuento2; ?></td>
<td> <?php echo $descuento3; ?></td>
<td> <?php echo $sueldoneto; ?></td>

</tbody>

</table>
    
</body>
</html>