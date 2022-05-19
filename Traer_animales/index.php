<html>
<h1>Listado de Tareas</h1>
<form action="agregar_info.php" method="post">

    <label>Nombre: <input type="text" name="nombre"></label></p>
    <label>Descripcion: <input type="text" name="descripcion"></label>
    <label>Alimentacion: <input type="text" name="alimentacion"></label>
    <label>Habitat: <input type="text" name="habitat"></label>
    <label>Extinto o no:
        <select name="extinto">
            <option value="0">Extinto</option>
            <option value="1">No Extinto</option>
        </select>
    </label>

    <input type="submit">

</form>

</html>
<label></label>
<label></label>

<?php
require_once "biblioteca/traermsql.php";
$todo_lo_que_hay = TraerDatosMSQL();
echo ("<table border=1>");
foreach ($todo_lo_que_hay as $recorrer) {
    echo ("<tr>");
    foreach ($recorrer as $item) {
        echo "<td>";
        echo ($item);
        echo "</td>";
    }
    echo ("<td>");
    echo ("</td>");
}
echo ("</tr>");
echo ("</table>");
?>