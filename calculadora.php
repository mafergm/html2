<?php
 
 $valoruno=$_POST['1er'];
 $valordos=$_POST['2do'];

 $opcion=$_POST['operaciones'];

 if($opcion=='suma')
 {
  echo "El Resultado de la Operacion es: ".($valoruno+$valordos);
 }
 else if($opcion=='mult')
 {
  echo "El Resultado de la Operacion es: ".($valoruno*$valordos);
 }
 else if($opcion=='divs')
 {
  echo "El Resultado de la Operacion es: ".($valoruno/$valordos);
 }
  else if($opcion=='rest')
 {
  echo "El Resultado de la Operacion es: ".($valoruno-$valordos);
 }
?>