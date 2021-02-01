<!DOCTYPE html>
<html lang="es">
    <head>
        <title>PHP_M5</title>
    </head>
    <body>
        <?php
        echo "<h1>Nivell 1 </h1>";
        echo "<br>";
        echo "<br>";
        echo "<strong>exercici 1</strong>"."<br>"."<br>"."<br>";
         $integ = 25; //declara un integer
         $dob = 2.4;  //declara un double
         $letter = "Hello world"; //declara string
         $existe = true; //declara boolean   

         echo $integ."<br>";    
         echo $dob."<br>";
         echo $letter."<br>";
         echo $existe."<br>";
         
         echo "<br>";
         echo "<br>";
         
         echo "<strong>exercici 2</strong>"."<br>";
         $letter1 ="exercici2";

         //Imprime length de string
         echo strlen($letter.$letter1)."<br>";
         echo strlen ($letter)."<br>";
         echo strlen ($letter1)."<br>";

         //Imprime string alravez
         echo strrev ($letter)."<br>";
         echo strrev ($letter1)."<br>";

         echo "<br>";
         echo "<br>";

         //imprime cancatenacion de dos string
         echo $letter." ".$letter1."<br>"."<br>";

         //creacion de constant

         define("bienvenido", "Bienvenido el curso de PHP");
         echo bienvenido;

         //
         echo "<h1>Nivell 2 </h1>";

         //crear array exercici 1
         $info = array(2, 3, 4, 5, 6);
         $info1 = array(5, 4, 3);

        echo "<br>";
        echo "<br>";

         //exercici 2

         $info1[3] = 2;

         echo "<br>";
         echo "<br>";


         //exercici 3
         echo "<strong>Exercici 3</strong><br><br>";

         $sumainfo = array_merge($info,$info1);
         echo count($sumainfo);

         echo "<br>";
         echo "<br>";

         echo "<h1>Nivell 3 </h1>";

         echo "<br>";
         echo "<br>";

         //exercici 1
         echo "<strong>exercici 1</strong>"."<br>";

         foreach($sumainfo as $x) {
             echo $x;
             echo "<br>";
         }
         echo "<br>"."<br>"."<br>";

         //exercici 2
         echo "<strong>exercici 2</strong><br><br>";

         $X = 3;
         $Y = 4;
         $N = 5.4;
         $M = 2.7;

         echo $X;
         echo "<br>";
         echo $Y;
         echo "<br>";
         echo $N;
         echo "<br>";
         echo $M;
         echo "<br>"."<br>"."<br>";

         echo "suma, resta, multiplicacion, devision y Modulus de <strong>X</strong> y <strong>Y</strong><br><br>";

         echo "suma de X y Y"."<br>";
         echo $X + $Y;
         echo "<br>";
         echo "rest de X y Y"."<br>";
         echo $X - $Y;
         echo "<br>";
         echo "Producto de X y Y"."<br>";
         echo $X * $Y;
         echo "<br>";
         echo "Division de X y Y"."<br>";
         echo $X / $Y;
         echo "<br>";
         echo "Modulus de X y Y"."<br>";
         echo $X % $Y;
         echo "<br>"."<br>"."<br>";

         echo "suma, resta, multiplicacion, devision y Modulus de <strong>N</strong> y <strong>M</strong><br><br>";



         echo "suma de N y M"."<br>";
         echo $N + $M;
         echo "<br>";
         echo "resta de N y M"."<br>";
         echo $N - $M;
         echo "<br>";
         echo "Producto de N y M"."<br>";
         echo $N * $M;
         echo "<br>";
         echo "deivision de N y M"."<br>";
         echo $N / $M;
         echo "<br>";
         echo "Modulus de N y M"."<br>";
         echo $N % $M;
         echo "<br>"."<br>"."<br>"."<br>";

         //el doble de cada uno
         


         echo "El doble de cada uno"."<br>"."<br>";

         echo $Y * 2;
         echo "<br>";
         echo $x * 2;
         echo "<br>";
         echo $N * 2;
         echo "<br>";
         echo $M * 2;
         echo "<br>"."<br>"."<br>";


         //suma de todos variables
         echo "Suma total"."<br>"."<br>";

         echo $Y + $X + $N + $M;
         echo "<br>"."<br>"."<br>";

         echo "Multiplicacion de todo"."<br>"."<br>";

         echo $Y * $X * $N * $M;




         






        ?>
    </body>
</html>