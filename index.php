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

        for($i=0; $i<=10; $i++){
            echo $i." ";
        };
        echo "<br>"."<br>";






    ?>
 
</body>

</html>