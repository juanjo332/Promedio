<?php
  
            $venta=array(10.50, 75.25, 98.47, 36.25, 96.32, 85.21, 55.20, 10.28, 74.00, 66.41, 12.28, 10.45, 11.55, 14.00, 77.89, 46.33, 88.55, 41.13, 11.25, 88.39);
            $suma=0;        
            for($numeros=0; $numeros<=count($venta)-1; $numeros++){
             $suma += $venta[$numeros];
            }
           


        $promedio= $suma/count($venta);
        echo 'El promedio es: '.$promedio;


?>
     


