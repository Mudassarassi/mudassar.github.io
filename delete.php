<?php

 include "db_incluide.php";

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
  ?>
<!DOCTYPE html>

<html>

    </head>
    <body>

  <?php
 /* echo $_GET("name");
        /* @var type $_GET */
       /*       $name= $_GET["name"];
             $precio = $_GET["precio"];
             $can = $_GET["quan"];
   */    
$id = $_GET['id']; // get id through query string

$del = mysqli_query($mysqli,"delete from compra where id = '$id'"); // delete query

if($del)
{
    mysqli_close($mysqli); // Close connection
    header("location:index.php"); // Vuelve a la pagina original
    exit;	
}
else
{
    echo "Error deleting record"; // Si hay algun error muestra error
}
  
        
          ?>
    </form>
    </body>
</html>
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

