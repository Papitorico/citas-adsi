<html>
    <head>
        <title>Editar Consultorio</title>
        <?php include_once $GLOBALS["UrlWeb"]."/Views/Commons/header.php"?>
            </head>
    <body>
        <?php include_once $GLOBALS["UrlWeb"]."Views/Commons/navenfermero.php"?>
        <h2></h2>
        
        <div class="row mt-4">
            <div class="col-4"></div>
            <div class="col-4">
                <div class="card">
        
        <form action="../Controladores/Proxy.php?c=Consultorio&a=actualizar" method="POST">
            
            <div class="card-header bg-success text-white text-center">Editar Consultorio</div>
                        <div class="card-body"> 
        <label>Numero del consultorio </label></br> 
        <input name="conNumero"type="hidden" value="<?php echo $entity->track_id?>" ><br/>
        <input name=""type="text" value="<?php echo $entity->track_id?>" disabled="disabled"><br/>
        <label>Nombre del consultorio</label></br>
        <input name="conNombre"type="text"value="<?php echo $entity->title?>"><br/><br/>
        
               </div>
                        <div class="card-footer text-center"><input type="submit" value="Editar Consultoio"class="btn btn-primary"></div>
                
                </div>
        
        </form>
                    
        </div>
            </div>
            <div class="col-4"></div>
        </div>            
                    
    </body>
</html>