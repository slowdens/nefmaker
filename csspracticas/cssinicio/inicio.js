

$(document).ready(function(){
  
});

function tomarpaginas()
{
    $.ajax({
                           url:'AgregarUsuarioRol',
                           type:'post',
                           data :{
                                nombre : 'inicio'                                
    
                           },
                           datatype:'json',
                           success:function(datos)
                           {
                               
                           }
    });
}