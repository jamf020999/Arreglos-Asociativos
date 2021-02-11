<?php
echo "Empleado/a 1";
echo "<br>";
$Empleado1 = array('Nombre'=>'Jose', 'Apellido'=>'Moreno', 'Cedula'=>'27197674',
'Sueldo'=>'20$', 'Departamento'=>'Area de sistemas', 'Lugar de trabajo'=>'Sala de computacion 2');

foreach($Empleado1 as $clave=>$dato)
{
echo  $clave . ": " . $dato;
echo "<br>";
 }
 echo "<br>";
 echo "Empleado/a 2";
 echo "<br>";
 $Empleado2 = array('Nombre'=>'Alejandro', 'Apellido'=>'Suarez', 'Cedula'=>'28583913',
'Sueldo'=>'25$', 'Departamento'=>'Diseño de plantillas', 'Lugar de trabajo'=>'Estudio 4');

foreach($Empleado2 as $clave=>$dato)
{
echo  $clave . ": " . $dato;
echo "<br>";
 }
 echo "<br>";
 echo "Empleado/a 3";
 echo "<br>";
 
 $Empleado3 = array('Nombre'=>'Marisol', 'Apellido'=>'Gutierrez', 'Cedula'=>'28583913',
 'Sueldo'=>'15$', 'Departamento'=>'Contaduria', 'Lugar de trabajo'=>'Estudio 3');
 
 foreach($Empleado3 as $clave=>$dato)
 {
 echo  $clave . ": " . $dato;
 echo "<br>";
  }
?>