<?php declare(strict_types=1) ?>
<?php
        include "db_incluide.php";
      
        ?>

<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->

    <head>
        <meta charset="UTF-8">
        <title></title>
        <style>
table, th, td {
    border: 1px solid black;
    width: 30%;
}
</style>
    </head>
    
        <?php
      /*  *****************Aqui añadimos 3 Compras**************
        $enter = "INSERT INTO Compra(Nom, Preu, Quantitat) VALUE('Katchup',1.25,2)";
        $enter1 = "INSERT INTO Compra(Nom, Preu, Quantitat) VALUE('Mayonesa',2.5,2)";
        $enter2 = "INSERT INTO Compra(Nom, Preu, Quantitat) VALUE('Salsa',3,2)";
       if($mysqli->query($enter)===true){
           echo "producto agregado";
       }else {
           echo "error:".$enter."<br>".$mysqli->error;
       }
       $mysqli->query($enter1);
       $mysqli->query($enter2);
       */
       $nom = "select sum(Preu) from compra";
/* $pre= "select Preu from compra";
       $quant= "select Quantitat from compra";
      */
        /*
        
       $result = $mysqli->query($nom);
       $nums_rows = mysqli_num_rows($result);
      */
       
       $result = mysqli_query($mysqli, "select * from compra");
       if (mysqli_num_rows($result) >0){
           echo "<table><tr><th>Nombre</th><th>precio</th><th>Quantitat</th><th>Id</th><th>Modificar</th><th>eliminar</th></tr>";
           while($row = $result->fetch_assoc()){
              // echo "<tr><td>" . $row["Nom"]."</td><td>".$row["Preu"]."</td><td>".$row["Quantitat"]."</td><td>".$row["id"]."</td><td></td></tr>";
           ?>
<tr>
<td><?php echo $row["Nom"]?></td>
<td><?php echo $row["Preu"]?></td>
<td><?php echo $row["Quantitat"]?></td>
<td><?php echo $row["id"]?></td>
<td><a href="edit1.php?id=<?php  echo $row["id"]?>">Edit</a> </td> 
<td><a href="delete.php?id=<?php echo $row["id"]?>"> Delete</a></td>
</tr>
               
          <?php  } 
           
           echo "</table>";
           }else {echo "0 result";}
           
           $total = mysqli_query($mysqli, $nom);
           $total1 = $total->fetch_assoc();
           $total2 = $total1["sum(Preu)"];

           echo "<table style= width:30%;><tr><td>Total</td><td>". $total2."</td></tr></table>";
            $total1["sum(Preu)"];
            
           // $delete = mysqli_query($mysqli, "delete from compra where id=$eli");


$mysqli->close();
        ?>
                <!-- comment <a href='insereix'><input type="button" value="Insereix" onclick="<a href='/Insereix.html'></a>">
        -->
        <button onclick="document.location='insereix.html'">Insereix</button>
        <button onclick="<?php $mysqli->query('delete from compra where id=5;')?>">Hola</button>
        
    

