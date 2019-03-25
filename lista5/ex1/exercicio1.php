<?php

 //A

 $valores= array($_GET["v1"], $_GET["v2"],$_GET["v3"],$_GET["v4"],$_GET["v5"]);
 
 $maior=0;
 
 for ($i=0; $i < count($valores); $i++){
         
         if($valores[$i] > $maior){
            $maior = $valores [$i];
         }
     }
     
     echo $maior ."<br>";
     
//B
  
     for ($i=0; $i < count($valores); $i++){
         
         if($valores[$i]%2==0){
            echo $valores[$i] ." é par!!!<br>"; 
         }
     }   
     
 //C 
     
     for ($i=0; $i < count($valores); $i++){
         
         if (($valores[$i]%3==0)&&($valores[$i]%5==0)){
            echo $valores[$i] ."<br>";  
         }else{
             echo $valores[$i] ." Não é multiplo de 3 e 5!!! <br>";
         }
     }
?>



