<?php
require_once "libreria/lib.php";

//$conexion = conexion(); var_dump($conexion);
?>
<html>

<head>
</head>

<body>
    <h1>Lista de Tareas</h1>
    <form>
    </form>
    <?php

    // print_r($tarea);

    // echo "NOMBRE: ".$nombre." ";
    $tarea = TraerDatosMSQL();
    // $sub_tarea=$tarea["personajes"];
    //print_r($sub_tarea);
    echo ("<table>");
    foreach ($tarea as $viaje) {
        echo ("<tr>");
        foreach ($viaje as $otro) {
            $nombre = $viaje["nombre"];
            $id = $viaje["id_personajes"];
            $poder = $viaje["poder"];
            $villano = $viaje["villano"];
            $categoria = $viaje["id_categoria"];
            if ($categoria == 2) {
                echo "<h2> Estos son los Villanos</h2>";
                echo "Nombre: " . $nombre . " ";
                echo "Poder: " . $poder . " ";
            }
            echo ("<td>");
            echo ("</td>");
        }
        echo ("</tr>");
      }
    echo ("</table>");
    ?>
</body>

</html>