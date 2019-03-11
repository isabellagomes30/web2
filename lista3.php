<html>
    <head>
        <meta charset="UTF-8">
        <title>Lista 3 Funções </title>
    </head>
    <body>
	
        <?php
        echo  " Exercício 1 <br>" ;
		
        $numero=997;
        function NumeroPrimo ($numero){
        $count=0;
		
        for($i=1;$i<=$numero;$i++){
           if($numero % $i==0) {
               $count=$count+1;
           }
        }
           if($count==2){
               echo " O Número é Primo ";
           } else {
               echo" O Número é composto Composto ";
           }
        }      
		
       NumeroPrimo ($numero);         
          
       
        echo  "<br> Exercício 2 <br>" ;
        

    function primo($num) {
                $cont=0;  
                
                for ($i=1; $i<=$num; $i++){
                    if ($num%$i==0){
                        $cont++;
                   }
                }
                
                if ($cont == 2){
                    echo "<p>O número $num é Primo</p>";
                } else {
                    echo "<p>O número $num NÃO é Primo</p>";
                }
    }
    
    for ($i=1; $i<=100; $i++){
      primo ($i);  
    }

       ?>
	   
        <ul>
		
            <?php

             echo  "<br> Exercício 3 <br> " ;

             $color = array(
                 'Red',
                 'Yellow',
                 'Blue',
                 'Black',
                 'White',
                 'Pink',
                 'Green',
                 'Gray',
                 'Purple',
                 'Brown'
                 );
                 function Cores ($color){

                     for($i=0;$i<count($color);$i++){
            ?>
			
            <li>
			
            <?php
                echo $color[$i];  
            ?>           
			
            </li>

             <?php
                     }

                 }
                 Cores($color);

             ?>
			 
        </ul>
    </body>
</html>

