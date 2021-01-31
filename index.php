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

         foreach($sumainfo as $x) {
             echo $x;
             echo "<br>";
         }




        ?>
    </body>
</html>