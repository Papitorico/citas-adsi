    <?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ConsultoriosEntity
 *
 * @author albar
 */
class ConsultoriosEntity {
    //put your code here
    public $conNumero;
    public $conNombre;
    
    public function __construct(){
        
        $this->conNumero=NULL;
        $this->conNombre=NULL;
            }
    public function getConNumero(){
         return $this->conNumero;
     }
     
     public function getConNombre(){
         return $this->conNombre;
     }
     public function setConNombre($conNombre){
          $this->conNombre=$conNombre;
     }
     public function setConNumero($conNumero){
          $this->conNumero=$conNumero;
     }
     
     
     
            
    
}
