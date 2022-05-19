
<?php
function html(){
    $html='<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <h1>Aqui se presentan todos los personajes
        que estan en la base de datos:</h1>
        <label></label>
        </body>

</html>';
        return $html;
};
html();

$user="root";
$pass="";
$db="sobrehumanos";
$conexion=new PDO('mysql:host=localhost;dbname=sobrehumanos'
,$user,$pass);

$sql='SELECT * FROM metahumanos';
$resultado=$conexion->query($sql);
$categoria_filas=$resultado->fetchAll(PDO::FETCH_NAMED);

print_r($categoria_filas);

$sql='SELECT * FROM personajes';
$resultado=$conexion->prepare("SELECT * FROM personajes")
$resultado->execute();
$personajes_filas=$resultado->fetchAll(PDO::FETCH_OBJ);

foreach($personajes_filas as $persona){

    echo "| Nombre de Personaje : ".$persona->$personajes_filas." | ";
            /*[nombre] => Kang
            [poder] => 300
            [villano] => 0
            [id_categoria] => 2*/
};
?>