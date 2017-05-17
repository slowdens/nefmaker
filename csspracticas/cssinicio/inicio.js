

$(document).ready(function(){
    tomarpaginas();
});

function tomarpaginas()
{
    $.ajax({
                           url:'../csspracticas/Clases/Remo/remoto.php',                           
                           type:'post',
                           data :{
                                opt : 'Inicio'                                
    
                           },
                           datatype:'json',
                           success:function(datos)
                           {
                               //var obj = jQuery.parsJSON(datos);
                               console.log(datos.res);
                               
                               
                           }
    });
}