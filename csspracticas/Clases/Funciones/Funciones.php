<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Funciones
 *
 * @author nef
 */
class Funciones {
    //put your code here
     private $json;
      public function Tomainformacion(){
          $jsons= "[";
          $jsons .='{"Fruta": "Manzana" },';
          $jsons .='{"Fruta": "Platano" },';
          $jsons .='{"Fruta": "Mango" }';
          $jsons.="]";
          
          $this->json= $jsons;
                  
           return $this->json;

       }
       
       public function InformacionGeneral(){
           require_once '../Conexiones.php';           
           /*Creamos la instancia del objeto. Ya estamos conectados*/
           $bd=  Conexiones::getInstance();
           
           $sql='CALL sp_informacion;';
           /*Ejecutamos la query*/
           $stmt = $bd->ejecutar($sql);
           $this-> rawdata = array(); //creamos un array
           $i=0;
           /*Realizamos un bucle para ir obteniendo los resultados*/
           $jsons= "[";
           while ($x=$bd->obtener_fila($stmt,0)){
              $jsons .='{"Fruta": "'.$x[0].'" },';  //$x[0];

                    $i++;
           }
           return $this->json;
       }
               
       
       public function Tomarpaginas(){
           require_once '../Conexiones.php';           
           /*Creamos la instancia del objeto. Ya estamos conectados*/
           $bd=  Conexiones::getInstance();
           
           $sql='CALL sp_tomarpagina(\''.$usuario.'\');';
           /*Ejecutamos la query*/
           $stmt = $bd->ejecutar($sql);
           $this-> rawdata = array(); //creamos un array
           $i=0;
           /*Realizamos un bucle para ir obteniendo los resultados*/
           while ($x=$bd->obtener_fila($stmt,0)){
               $this-> permiso = $x[0];

                    $i++;
           }
           return $this->json;
       }
               
}
