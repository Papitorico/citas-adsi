<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php

$GLOBALS["UrlWebhttp"]= "http://localhost/CLIENTE/";
$GLOBALS["UrlWeb"]= "C:/xampp/htdocs/CLIENTE/";
include_once "../Controladores/ConsultoriosControl.php";
include_once "../Models/ConsultoriosFacade.php";
$consultorios=new ConsultoriosControl();
 
$registros = $consultorios->getConsultoriosAll();

if($registros){
    
    
}



?>



<html>
    <head>
        <meta charset="UTF-8">
        <title>Lista de consultorio</title>
        <?php include_once $GLOBALS["UrlWeb"]."Views/Commons/header.php"?>
        
    </head>
    <body>
         <?php include_once $GLOBALS["UrlWeb"]."Views/Commons/navenfermero.php"?>
        <div class="row">
            <div class="col-sm-3 col-md-3 col-12"></div>
            <div class="col-sm-6 col-md-6 col-11">
                <table class="table">
            <tr><th>track_id</th><th>Title</th><th colspan="2">Opciones</th></tr>
            <?php
            
            if($registros){
             //foreach($registros->fetch_array() as $item)
             while($item = $registros->fetch_object()){
                 
                 echo "<tr><td>$item->track_id</td><td>$item->title</td><td><a href='".$GLOBALS["UrlWebhttp"]."Controladores/Proxy.php?c=Consultorio&a=editar&id=$item->track_id' class='btn btn-success'>Editar</a></td><td><a href='".$GLOBALS["UrlWebhttp"]."Controladores/Proxy.php?c=Consultorio&a=eliminar&id=$item->track_id' class='btn btn-danger'>Eliminar</a></td></tr>";
             }
            }
            ?>
                                       
            
        </table>
            </div>
            <div class="col-sm-3 col-md-3 col-12"></div>
        <table class="table">
            <tr><th>track_id</th><th>Title</th><th colspan="2">Opciones</th></tr>
            <?php
            
            if($registros){
             //foreach($registros->fetch_array() as $item)
             while($item = $registros->fetch_object()){
                 
                 echo "<tr><td>$item->track_id</td><td>$item->title</td><td><a href='".$GLOBALS["UrlWebhttp"]."Controladores/Proxy.php?c=Consultorio&a=editar&id=$item->track_id' class='btn btn-success'>Editar</a></td><td><a href='".$GLOBALS["UrlWebhttp"]."Controladores/Proxy.php?c=Consultorio&a=eliminar&id=$item->track_id' class='btn btn-danger'>Eliminar</a></td></tr>";
             }
            }
            ?>
                                       
            
        </table>
        </div>
    </body>
</html>
