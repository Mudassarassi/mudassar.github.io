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
        // put your code here
        echo "Modifica llibre ".$id;
        
     /*   echo '<br><h1>Estad editant'.$id.'</h1><br>
  /*          <form method="POST" action="'.{{route("contact")}}.'">
        <input name="name" placeholder="titulo"><br>
        <input name="Descripcion" placeholder="Descripcion"><br>
        <button>Enviar</button>
         </form>'*/
        ?>
        
        <form method="GET" action="http://localhost/P/public/edit">
        <input name="name" placeholder="titulo"><br>
        <input name="Descripcion" placeholder="Descripcion"><br>
        <button>Enviar</button>
         </form>'
    </body>
</html>
