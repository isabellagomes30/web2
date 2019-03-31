<?php
$med = 0;
$tam = 0;
$pares = array();
$impares = array();
for($i = $_POST['vi']; $i<=$_POST['vf']; $i++){
   $med += $i; 
   
   if($i % 2 == 0){
      $pares[$tam] = $i; 
   }else{
       $impares[$tam] = $i;
   }
   $tam ++;
}

echo "A média de valores no intervalo informado é ". $med/$tam;
echo '<pre>';
echo "Valores pares: \n";
print_r($pares);
echo "Valores ímpares: \n ";
print_r($impares);


