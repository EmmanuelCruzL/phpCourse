<?php
require "uploadFile.php";

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php require('partials/cdn.php') ?>


</head>

<body>

    <div style="padding: 10px;">
        <form action="index.php" method="POST" enctype="multipart/form-data">
            <div class="form-group col-md-6 ">
                <label >Titúlo</label>
                <input  class="form-control" type="text" name="title" placeholder="Titulo">
            </div>
            <div class="form-group col-md-6">
                <label >Autor</label>
                <input  class="form-control" type="text" name="author" placeholder="Autor">
            </div>
            <div class="form-group col-md-6">
                <label>Descripción</label>
                <textarea class="form-control" name="description" rows="3" placeholder="Descripción"></textarea>
            </div>
            <div class="form-group col-md-6">
                <label>Archivo</label>
                <input type="file" name="file" class="form-control-file" >
            </div>
            <div class="form-group col-md-6">
                <label>Imagen Muestra</label>
                <input type="file" class="form-control-file" name="imageFile">
            </div>

            <div class="form-group col-md-6">
                <label xampleFormControlSelect1">Categoria</label>
                <select class="form-control" id="exampleFormControlSelect1">
                  <option>Financiero</option>
                  <option>Emocional</option>
                  <option>Emprendedor</option>
                  <option>Ventas</option>
                  <option>Social</option>
                </select>
            </div>
            <div>
           <input type="submit" name="submit" value="Upload" class="btn btn-primary">
        </div>
       
        </form>
        
    </div>


    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>

</html>