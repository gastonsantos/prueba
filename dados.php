<?php
if(isset($_POST['boton'])) {
    $valorUno = 0;
    $valorDos = 0;
    function lanzarDadoUno()
    {
        $valorUno = rand(1, 6);
        echo "Dado UNO: " . "$valorUno" . "<br>";
        return $valorUno;

    }

    function lanzarDadoDos()
    {
        $valorDos = rand(1, 6);
        echo "Dado DOS: " . "$valorDos" . "<br>";
        return $valorDos;

    }

    /*function sumarDados($valoroUno, $valoroDos){
        $suma1 = $valoroUno;
        $suma2 = $valoroDos;
        $resultado = $suma1+$suma2;
        echo "La suma de los Dos dados es: " . "$resultado";
        return $resultado;
    }
    */
    $valorUno = lanzarDadoUno();
    $valorDos = lanzarDadoDos();
    /*sumarDados($valorUno, $valorDos);
    echo "La suma de los Dados es: " . sumarDados();*/

    function mostrarDadoUno($valorUno)
    {
        if ($valorUno == 1) {
            echo "<img SRC='dados/uno.png' width='300px' height='300px'> ";
        } else if ($valorUno == 2) {
            echo "<img SRC='dados/dos.png'width='300px' height='300px' >";
        } else if ($valorUno == 3) {
            echo "<img src='dados/tres.png'width='300px' height='300px' >";
        } else if ($valorUno == 4) {
            echo "<img src='dados/cuatro.png' width='300px' height='300px'>";
        } else if ($valorUno == 5) {
            echo "<img src='dados/cinco.jpg' width='300px' height='300px'>";
        } else {
            echo "<img src='dados/seis.jpg' width='300px' height='300px'>";
        }
    }


    function mostrarDadoDos($valorDos)
    {
        if ($valorDos == 1) {
            echo "<img SRC='dados/uno.png' width='300px' height='300px'> ";
        } else if ($valorDos == 2) {
            echo "<img SRC='dados/dos.png'width='300px' height='300px' >";
        } else if ($valorDos == 3) {
            echo "<img src='dados/tres.png'width='300px' height='300px' >";
        } else if ($valorDos == 4) {
            echo "<img src='dados/cuatro.png' width='300px' height='300px'>";
        } else if ($valorDos == 5) {
            echo "<img src='dados/cinco.jpg' width='300px' height='300px'>";
        } else {
            echo "<img src='dados/seis.jpg' width='300px' height='300px'>";
        }

    }

    mostrarDadoUno($valorUno);
    echo "+";
    mostrarDadoDos($valorDos);


}



?>