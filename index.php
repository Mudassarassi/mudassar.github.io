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
    </head>
    <body>
        <?php
        
        $mysqli = new mysqli("localhost", "usuario", "contraseña", "basedatos");
        if ($mysqli->connect_erno){
            echo "Fallo al conectar a MySQL: (". $mysqli->connect_errno.")".$mysqli->connect_errno;
        }
        echo $mysqli->host_info."\n";
        
        ?>
    </body>
</html>
