<?php
header('Content-Type: application/json');
$opcion  = $_POST['opt'];
$json;


switch ($opcion)
{
    case "Inicio":
            require_once '../Funciones/Funciones.php';  
            $funciones = new Funciones();
            $res = $funciones->InformacionGeneral();
            echo $funciones->InformacionGeneral();
        break;
    case "TomaInfoInicial":
        break;
}
/*
if($opcion="Ejemplo")
{
    $json= "[";
    $json .='{"Fruta": "Manzana" },';
    $json .='{"Fruta": "Platano" },';
    $json .='{"Fruta": "Mango" }';
    $json.="]";
    //$ar = json_decode($json);
    echo  $json;
    
    //En javascrip se manda llamar así:
    //console.log(datos[0].Fruta);
    
}*/
?>

