<!DOCTYPE html>
<html>
<head>
</head>
<body style="text-align:center;">
    <?php
        //funcion de restar dado 2 numeros da resultado
        echo "<h1><strong>Nivell 1</strong></h1><br><br>";
        echo "<strong>exercici 1</strong>"."<br>"."<br>";

        function resta($n1, $n2){
            return $n1-$n2;
        }
        echo resta(3,2)."<br>"."<br>"."<br>";


        echo "<strong>exercici 2</strong>"."<br>"."<br>";
        //Dado un numero dice si un numero es par o impar

        $edad = 15;
        if($edad%2==0) {
            echo "Este numero es par";
        } else {
            echo "Este numero es impar"."<br>"."<br>";
        };

        echo "<strong>exercici 3</strong>"."<br>"."<br>";
        //Funcion dado un numero dice par o impar

        function parell_o_imparell($n){
            if($n%2==0) {
                echo "Este numero es par";
            } else {
                echo "Este numero es impar"."<br>"."<br>";
            };

        };
        echo parell_o_imparell(10)."<br>"."<br>";

        echo "<strong>exercici 4</strong>"."<br>"."<br>";
        //un bucle de 10 numeros

        for($i=0; $i<=10; $i++){
            echo $i." ";
        };
        echo "<br>"."<br>";

        echo "<h1><strong>Nivell 2</strong></h1><br><br>";
        echo "<strong>exercici 1</strong>"."<br>"."<br>";

        $x = 0;

        while($x<=10){
            echo $x." ";
            $x +=2;
        };

        echo "<br>"."<br>";
        echo "<strong>exercici 2 y 3</strong>"."<br>"."<br>";
        
        //Una funcion de sumar 2 en 2 y su valor default es 10.
        $count=10;
        function amagatall($count= 10){
            $x=0;
            if($count%2==0){
                $x=0;
            }else {$x=1;}
            while($x<=$count){
                echo $x." ";
                $x += 2;
            };
        }
        echo amagatall(15);

        echo "<br>"."<br>";
        echo "<h1><strong>Nivell 2</strong></h1><br><br>";
        echo "<strong>exercici 1</strong>"."<br>"."<br>";

        $x = 1960;
        do {
            echo $x." ";
            $x +=4;

        } while($x<=2016);
        echo "<br>"."<br>";
        echo "<strong>exercici 2</strong>"."<br>"."<br>";
        //una tienda dado 3 parametros multiplica por cantido y suma total.
        function shop($qx, $qb, $qt){
            $x= 1;
            $b= 0.5;
            $t= 1.5;
            $total = $x*$qx + $b*$qb + $t*$qt;
            return $total;
        }
        echo shop(2,1,1);

        echo "<br>"."<br>";
        echo "<strong>exercici 3</strong>"."<br>"."<br>";
        //funcion de un algoritmo dado un numero te dado numero la criba d'Eratóstenes

       echo "<br>"."<br>";
       $num = array();
       function criba1($criba){
        
        for($i=2; $i<=$criba; $i++){
            $num[$i]=$i;
        }      
        for ($i=2; $i<=$criba; $i++){
            for($j=2; $j*$i<=$criba; $j++){
                unset($num[$j*$i]);
            }
        }
        foreach($num as $value){
            echo $value." ";
        }
       }
       echo criba1(100)."<br>"."<br>";
/*
       function criba($cribe){

        $num = array();
        for($i=2; $i<=$cribe; $i++){
            $num[$i]=$i;
        }
        //$cuadrado = pow(max($num),2)<$cribe

        //eliminamos todos los numero multiplicado por 2 manteniendo el 2
        $x=4;
        while($x<=$cribe){
            unset($num[$x]);
            $x +=2;
        }
        //eliminamos todos los numero multiplicado por 3 manteniendo el 3
        $x=6;
        while($x<=$cribe){
            unset($num[$x]);+
            $x +=3;
        }   
        foreach($num as $value){
            echo $value." ";
        };
    }// while(pow(max($num),2)<$cribe);


*/




    ?>
 
</body>

</html>