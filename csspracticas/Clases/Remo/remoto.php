<?php
header('Content-Type: application/json');
$opcion  = $_POST['opt'];
$json;
if($opcion="Inicio")
{
     
    $json ='{"res": "Ok" }';
    $ar = json_decode($json);
    echo $json;
    
}
else
{
    $json ='{"res": "vacio" }';
    $ar = json_decode($json);
    return $ar;
}
?>

