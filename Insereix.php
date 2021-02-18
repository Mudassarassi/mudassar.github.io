<?php
include "db_incluide.php";
include "insereix.html";
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
  $name = filter_input(INPUT_GET, "name");
  $precio = filter_input(INPUT_GET, "precio");
  $can = filter_input(INPUT_GET, "quan");
        $sql = "INSERT INTO compra (Nom, Preu, Quantitat)
            VALUES ('$name', '$precio', '$can')";
        if ($mysqli->query($sql)===TRUE){
            echo "Nuevo Producto ha sido añadido";
                mysqli_close($mysqli); // Close connection
    header("location:index.php"); // redirects to all records page
    exit;
        }else {
  echo "error:".$sql."<br>".$mysqli->error;    
  }
  
        
          ?>
    </form>
    </body>
</html>

