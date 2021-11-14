<?php

//$_POST, $_GET, $_REQUEST

//print_r($_REQUEST);
//echo "<br>";
//print_r($_POST);
//echo "<br>";
//print_r($_GET);http://localhost/Controladores/Proxy.php?c=Consultorio&a=insertar&id:1
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$GLOBALS["UrlWeb"]= "C:/xampp/htdocs/CLIENTE/";
$GLOBALS["UrlWebhttp"]= "http://localhost/CLIENTE/";

include_once $GLOBALS["UrlWeb"]."Models/ConfigDB.php";
include_once $GLOBALS["UrlWeb"]."Models/ConsultoriosEntity.php";
include_once $GLOBALS["UrlWeb"]."Models/ConsultoriosFacade.php";
include_once $GLOBALS["UrlWeb"]."Controladores/ConsultoriosControl.php";


if(@$_GET["c"]=="Consultorio"){
    if($_GET["a"]=="insertar"){
      $numero= $_POST["conNumero"];
      $nombre=$_POST["conNombre"];
      //print_r($_REQUEST);
      $consultoriosC= new ConsultoriosControl();
      $entity=new ConsultoriosEntity();
      $entity->setConNumero($numero);
      $entity->setConNombre($nombre);
      $consultoriosC->insertarConsultorio($entity);
      include $GLOBALS["UrlWeb"]."Views/index.php";
     }
    if($_GET["a"]=="listar"){
      
      include $GLOBALS["UrlWeb"]."Views/index.php";
    }
    if($_GET["a"]=="actualizar"){
        
      $numero= $_POST["conNumero"];
      $nombre=$_POST["conNombre"];
      //print_r($_REQUEST);
      $consultoriosC= new ConsultoriosControl();
      $entity=new ConsultoriosEntity();
      $entity->setConNumero($numero);
      $entity->setConNombre($nombre);
      $consultoriosC->actualizarConsultorio($entity);
      include $GLOBALS["UrlWeb"]."Views/index.php";
        
      }
      
      if($_GET["a"]=="eliminar"){
        $id= $_GET["id"];
        $consultoriosC = new ConsultoriosControl();
        //$entity= new ConsultoriosEntity();
        print_r($consultoriosC->getConsultorioById($id));
        $entity = $consultoriosC->deleteConsultorioById($id);
        //$entity->setConNumero($numero);
        //$entity->setConNombre($nombre);
      
        include $GLOBALS["UrlWeb"]."Views/index.php";
    }
      
    if($_GET["a"]=="nuevo"){
        
        include $GLOBALS["UrlWeb"]."Views/Nuevo.php";
    }
    if($_GET["a"]=="editar"){
        $id= $_GET["id"];
        $consultoriosC = new ConsultoriosControl();
        //$entity= new ConsultoriosEntity();
        print_r($consultoriosC->getConsultorioById($id));
        $entity = $consultoriosC->getConsultorioById($id);
        //$entity->setConNumero($numero);
        //$entity->setConNombre($nombre);
      
        include $GLOBALS["UrlWeb"]."Views/editar.php";
        
    }
}

if(!isset($_GET["c"])){
    
    include $GLOBALS["UrlWeb"]."index.php";
}