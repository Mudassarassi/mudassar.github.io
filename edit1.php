<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <style>
            * {background: rgba(0, 128, 0, 0.3) }
table, th, td, form {
    border: 1px solid black;
    width: 30%;
    align-content: center;
    margin: 30%;}
    form, label, input {
    background: white;
    padding: 2px;
}
</style>
    </head>
    <body>

                <?php
  
$id = $_GET['id']; echo "<form method='POST' action='edit.php?id=" . $id . "'>";

?>
  <label for="fname">Producto</label><br>
  <input type="text" name="name" ><br><br>
  <label for="fname">Precio:</label><br>
  <input type="text" name="precio" ><br><br>
  <label for="fname">Cantidad:</label><br>
  <input type="text" name="quan" ><br><br>
  <input style="background-color: gray; font-size: 20px;  " type="submit" value="Submit">
  


    </body>
</html>
