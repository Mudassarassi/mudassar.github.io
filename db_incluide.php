<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 *//*
$dbserver = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "php_m8_n1";
*/
        $mysqli = new mysqli("localhost:3306", "root", "", "php_m8_n1");
        if ($mysqli->connect_errno){
            echo "Fallo al conectar a MySQL: (". $mysqli->connect_errno.")".$mysqli->connect_errno;
        } else{
        echo $mysqli->host_info."\n";
        }

