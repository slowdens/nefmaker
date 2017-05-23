<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Agregar paginas</title>
        <link href="css/bootstrap-3.3.7-dist/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/bootstrap-3.3.7-dist/css/bootstrap-theme.min.css" rel="stylesheet" type="text/css"/>
        <script src="cssinicio/jquery/jquery-3.2.1.min.js" type="text/javascript"></script>
        <script src="css/bootstrap-3.3.7-dist/js/bootstrap.min.js" type="text/javascript"></script>
      
        <script src="css/Agregar.js" type="text/javascript"></script>
    </head>
    <body>
        <div class="row">
            <div class="col-md-2">
                Titulo
            </div>
            <div class="col-md-4">
                <input type="text" id="txtTitulo" class="form-control" >
            </div>            
        </div>
        <div class="row">
            <div class="col-md-2">
                body
            </div>
            <div class="col-md-4">
                <textarea class="form-control" id="txtbody"></textarea>
            </div>
        </div>
        <div class="row">
            <div class="col-md-2">
                Leyenda Html
            </div>
            <div class="col-md-4">
                <textarea class="form-control" id="txtleyendaHtml"></textarea>
            </div>
        </div>
        <div class="row">
            <div class="col-md-2">
                html  mostrar
            </div>
            <div class="col-md-4">
                <textarea class="form-control" id="txthtmlmostrar"></textarea>
            </div>
        </div>
        <div class="row">
            <div class="col-md-2">
                leyenda css
            </div>
            <div class="col-md-4">
                <textarea class="form-control" id="txtLeyendacss"></textarea>
            </div>
        </div>
        <div class="row">
            <div class="col-md-2">
                css mostrar
            </div>
            <div class="col-md-4">
                <textarea class="form-control" id="txtCssMostrar"></textarea>
            </div>
        </div>
        <div class="row">
            <div class="col-md-2">
                ubicación css
            </div>
            <div class="col-md-4">
                <input type="text" id="txtubicacion"  class="form-control">                
            </div>
        </div>
        <div class="row">
            <div class="col-md-offset-1 col-md-2">
                
                <button id="btnAgregar"  class="btn btn-primary">Agregar</button>
            </div>
        </div>
    </body>
</html>
