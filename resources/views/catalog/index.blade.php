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
        echo "LLista llibres"
        ?>
        <form method="POST" action="/P/public/recibir">
            @csrf
            <h1>Enviar Datos con POST</h1><br>
        <input name="name" placeholder="introduzca nombre">
        <button>Enviar</button>
        </form>
        <form method="GET" action="/P/public/recibir">
            <h1>Enviar Datos con GET</h1><br>
        <input name="name" placeholder="introduzca nombre">
        <button>Enviar</button>
        </form>
    </body>
</html>
