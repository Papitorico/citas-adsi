<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php

include_once "../Models/ConexionDB.php";

/*$lista= array(
    array("1", "juan Aristizabal"),
    array("2", "su puta madre"),
    array("3", "la suya marica")
      
);*/

$conex= new ConexionDB();
/*
$servidor01="localhost";
$nombreUsuarioSer="root";
$contraseniaser="";
$basededatos="music";*/

@$conexion = new mysqli($servidor01, $nombreUsuarioSer, $contraseniaser, $basededatos);
if($conexion->connect_error){
    die("Error de conexion..".$conexion->connect_error);
    
}

$sql= "select * from track";
$registros = mysqli_query($conexion, $sql);// nos retorna datos como bjetos
        
if($registros){
    
    
}



?>



<html>
    <head>
        <meta charset="UTF-8">
        <title>Pagina en PHP</title>
    </head>
    <body>
        <h1>Lista de cnsultorio</h1>
        <?php
        //echo "<h1>Hola mundo</h1>";
        // put your code here
        /*$numero1= 5;
        echo "<h2>valor de la variable numero1=".$numero1. "</h2>";
        $numero3=array("a","b","c","d","e","g");
        for($i=0;$i<5;$i++){
            echo "<h1>$i</h1>";
        }
        
        echo "<h1>";
        for($i=0;$i<count($numero3);$i++){
            echo "$numero3[$i]---";
        }
         echo "</h1>";
         echo "<h1>";
        foreach($numero3 as $item1){
            echo $item1."";
        }
         echo "</h1>";*/
        
        ?>
        <table border="1">
            <tr><th>track_id</th><th>Title</th></tr>
            <?php
            
            if($registros){
             //foreach($registros->fetch_array() as $item)
             while($item = $registros->fetch_object()){
                 
                 echo "<tr><td>$item->track_id</td><td>$item->title</td></tr>";
             }
            }
            ?>
                                       
            
        </table>
        
    </body>
</html>
