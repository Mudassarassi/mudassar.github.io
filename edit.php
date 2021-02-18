<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

 include "db_incluide.php";

 
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
  ?>
<!DOCTYPE html>

<html>
    <head>

    </head>
    <body>

  <?php
 /* echo $_GET("name");
        /* @var type $_GET */
       /*       $name= $_GET["name"];
             $precio = $_GET["precio"];
             $can = $_GET["quan"];
   */    
$id = filter_input(INPUT_GET, "id"); // get id through query string
echo $id;
 $name = filter_input(INPUT_GET, "name");
  $precio = filter_input(INPUT_GET, "precio");
  $can = filter_input(INPUT_GET, "quan");
  echo $name." ".$precio." ".$can;
       
$edit = "UPDATE compra SET Nom='$name', Preu='$precio',Quantitat='$can' where id = '$id'"; // Update query

if ($mysqli->query($edit)===TRUE){
            echo "Producto cambiado";
    // Close connection
     // Vuelve a la pagina original
    	
}
else
{
    echo "Error deleting record"; // Si hay algun error muestra error
}
  
        
          ?>
    </form>
    </body>
</html>