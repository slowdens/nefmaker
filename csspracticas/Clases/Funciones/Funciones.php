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
        require_once '../ConServidor.php';
        $base = new ConServidor();        
        $datos = array();
        $sql='CALL sp_informacion;';        
        $mysqli = new mysqli($base->getServidor(),$base->getUsuario(), $base->getPassword(), $base->getBasedeDatos());
        /* comprobar la conexión */
        if ($mysqli->connect_errno) {
            printf("Falló la conexión: %s\n", $mysqli->connect_error);
            exit();
                        /* Si se ha de recuperar una gran cantidad de datos se emplea MYSQLI_USE_RESULT */
        }
        if ($resultado = $mysqli->query($sql, MYSQLI_USE_RESULT)) {                
            $i=0;
            while($obj = $resultado->fetch_object()){
                  $datos[$i] =array('Pantalla'=>$obj->Pantalla,'Link'=>$obj->Link,'Icono'=>$obj->icono) ;
                  $id=$obj->id;                
                  
                  
                  $Titulo = $obj->Titulo;
                  $DescripcionHtml = $obj->DescripcionHtml;
                  $i++;
                    
            } 
                /* Observar que no se puede ejecutar ninguna función que interactue con el
                   servidor hasta que el conjunto de resultados se haya cerrado. Todas las llamadas devolverán un
                   error 'out of sync' */
                
            $resultado->close();
        }
        $mysqli->close();
        return $datos;
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
