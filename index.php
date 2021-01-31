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
         echo "exercici 1"
         $integ =25; //declara un integer
         $dob =2.4;  //declara un double
         $letter ="Hello world"; //declara string
         $existe = true; //declara boolean   

         echo integ;    
         echo dob;
         echo letter;
         echo existe;
         
         echo "<br>";
         echo "<br>";
         
         echo "exercici 2"
         $letter1 ="exercici2"

         //Imprime length de string
         echo strlen(letter.letter1);
         echo strlen ($letter);
         echo strlen ($letter1);

         //Imprime string alravez
         echo strrev ($letter);
         echo strrev ($letter1);

         echo "<br>";
         echo "<br>";

         //imprime cancatenacion de dos string
         echo $letter.$letter1;

         //creacion de constant

         define ($bienvenido, "Bienvenido el curso de PHP");
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

         $sumainfo = array_merge($info,$info1);
         echo "(count($sumainfo))";

         echo "<br>";
         echo "<br>";

         echo "<h1>Nivell 3 </h1>";

         echo "<br>";
         echo "<br>";

         //exercici 1

         foreach($sumainfo as $x) {
             echo $x;
             echo "<br>";
         }

         //exercici 2

         $X = 3;
         $Y = 4;
         $N = 2.4;
         $M = 2.7;

         echo $X;
         echo "<br>";
         echo $Y;
         echo "<br>";
         echo $N;
         echo "<br>";
         echo $M;
         echo "<br>";

         echo "suma de X y Y";
         echo $X + $Y;
         echo "<br>";
         echo "rest de X y Y";
         echo $X - $Y;
         echo "<br>";
         echo "Producto de X y Y";
         echo $X * $Y;
         echo "<br>";
         echo "Division de X y Y";
         echo $X / $Y;
         echo "<br>";
         echo "Modulus de X y Y";
         echo $X % $Y;
         echo "<br>";


         echo "suma de N y M";
         echo $N + $M;
         echo "<br>";
         echo "resta de N y M";
         echo $N - $M;
         echo "<br>";
         echo "Producto de N y M";
         echo $N * $M;
         echo "<br>";
         echo "deivision de N y M";
         echo $N / $M;
         echo "<br>";
         echo "Modulus de N y M";
         echo $N % $M;
         echo "<br>";

         //el doble de cada uno


         echo "el doble de cada uno";

         echo $Y * 2;
         echo "<br>";
         echo $x * 2;
         echo "<br>";
         echo $N * 2;
         echo "<br>";
         echo $M * 2;
         echo "<br>";


         //suma de todos variables

         echo $Y + $X + $N + $M;
         echo "<br>";

         echo $Y * $X * $N * $M;




         






        ?>
    </body>
</html>