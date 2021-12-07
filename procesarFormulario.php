


<!DOCTYPE html>

<html>
<head>
    <meta charset="utf-8">
    <title>TP 4</title>
    <meta name="viewport" content="width=device-width, user-scalable=no,initial-scale=1.0, maximun-scale=1.0,minimun-scale=1.0 ">

    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

</head>
<body>
<?php
include 'menu.php';
?>

<?php
function imprimirGet($variable){
    if(isset($_POST[$variable])){
        echo "$variable: " . $_POST[$variable] . "<br>";
    }
}
if(move_uploaded_file($_FILES["foto"]["tmp_name"], "imagenes/imagen1.jpg")){
    echo "<img src='imagenes/imagen1.jpg'>" . "<br><br>";
}
imprimirGet("nombre");
?>

<div class="container col-md-12">
    <div class="text-center">

    </div class="container">

    <h5 class="text-center">Agregar Imagen</h5>
    <form action="procesarFormulario.php" method="post" enctype="multipart/form-data">
        <label>Nombre:  <input type="text" name="nombre"/></label>
        <input type="file" name="foto" id="foto" ><br>

        <input type="submit" name="Subir">
    </form>


</div>

<?php
include 'footer.php';
?>


<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
<!-- jQuery -->
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<!-- Bootstrap JS -->
<script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js'></script>
</body>


</html>

