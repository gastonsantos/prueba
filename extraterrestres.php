<?php
if (isset($_POST['boton'])){
         $datos=array();

        $nombre = $_POST['nombre'];
        $planeta = $_POST['planeta'];

        $datos = array("nombre"=>$nombre, "planeta"=>$planeta);

        $archivo = "datos.json";

        $file =fopen($archivo, "w");
        fwrite($file, $nombre ." ". $planeta);


    echo "<a href='ejercicio6.php'>" ."Volver Atrás"."</a>";
}
"Entrada----->"$entrada ."<br>". "Principal----->". $principal. " <br>". "Acompaniamiento". $acomp . "<br>". " Postre----->" . $postre. "<br>"

$datos = array("entrada"=>$entrada, "principal"=>$principal, "acomp"=>$acomp, "postre"=>$postre);

?>


