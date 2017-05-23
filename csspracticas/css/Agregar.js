$(document).ready(function(){
   $("#btnAgregar").click(function(){
        agregar();
   });
});

function agregar()
{
    
    var titulo = $("#txtTitulo").val();
    var body = $("#txtbody").val();
    var leyendaHtml = $("#txtleyendaHtml").val();
    var htmlmostra = $("#txthtmlmostrar").val();
    var Leyendacss = $("#txtLeyendacss").val();
    var CssMostrar = $("#txtCssMostrar").val();
    var ubicacion = $("#txtubicacion").val();
//    console.log(titulo);
//    console.log(body);
//    console.log(leyendaHtml);
//    console.log(htmlmostra);
//    console.log(Leyendacss);
//    console.log(CssMostrar);
//    console.log(ubicacion);
    

    $.ajax({
                           url:'Clases/Remo/remoto.php',
                           type:'post',
                           data :{
                                opt : 'AgregarPaginas',
                                titulo :titulo,
                                body:body,
                                leyendaHtml:leyendaHtml,
                                Leyendacss:Leyendacss,
                                CssMostrar:CssMostrar,
                                ubicacion:ubicacion
                                
                                
    
                           },
                           datatype:'json',
                           success:function(datos)
                           {
                               
                           }
    });
    
    
}