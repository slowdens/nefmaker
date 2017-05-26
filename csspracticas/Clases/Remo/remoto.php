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
           
            echo $res;
        break;
    case "TomaInfoInicial":
         $json= "[";
//         $json .='{"Fruta": "Manzana" },';
//         $json .='{"Fruta": "Platano" },';
         $json .='{"Fruta": "Mango" }';
         $json.="]";
    
    echo  $json;
    
        break;
    case "AgregarPaginas":
        $titulo = $_POST["titulo"];
        $body= $_POST["body"];
        $leyendaHtml= $_POST["leyendaHtml"];
        $Leyendacss= $_POST["Leyendacss"];
        $CssMostrar= $_POST["CssMostrar"];
        $ubicacion=$_POST["ubicacion"];
        $link=$_POST["Link"];
        
        require_once '../Funciones/Funciones.php';  
        $funciones = new Funciones();
        $res = $funciones->AgregarPaginas($titulo,$body,$leyendaHtml,$Leyendacss,$CssMostrar,$CssMostrar,$ubicacion,$link);
        
        
        
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

