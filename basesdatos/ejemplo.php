<?php

    include "include/funciones.php";


    define("USUARIO","tutoria");
    define("CONTRASENNA","tutoria");
    define("DBNAME","ejemplo");

    $consulta = "";

    function conectaDb() {
        try {
            $db = new PDO('mysql:host=localhost;dbname=tutoria;charset=utf8',USUARIO,CONTRASENNA);

            $db->setAttribute(PDO::MYSQL_ATTR_USE_BUFFERED_QUERY,true);
            $db->setAttribute(PDO::MYSQL_ATTR_INIT_COMMAND,"SET NAMES utf8");
            return($db);
        } catch (PDOException $e) {
            echo "<p>Error de conexión</p>";
            exit();
        }
    }

    //Eliminar:
    echo "Lista completa<br/>";
    $db = conectaDB();
    $sql = 'SELECT * FROM alumnos';
    $consulta = $db->query($sql);

    $mostrarLista = $consulta->fetchAll();

    foreach($mostrarLista as $value){
        echo $value['nombre']." ";
        echo $value['apellidos']."<button><a href='ejemplo.php?eliminar=".$value["id"]."'>Eliminar</a></button>
        <button><a href='ejemplo.php?editar=".$value["id"]."'>Editar</a></button><br>";
    }

    if(isset($_GET["eliminar"])){
        $db = conectaDB();

        $consulta = "DELETE FROM alumnos where id=?";
        $result = $db -> prepare($consulta);
        $result -> execute(array($_GET['eliminar']));

        if($result){
            echo "Registro eliminado correctamente.";
            echo "<br>";
        }
    }

    if(isset($_GET["editar"])){
        $db = conectaDB();

        $id = $_GET['editar'];

        $consulta = "SELECT * FROM alumnos where id=$id";
        $result = $db->query($consulta);
        $alumno = $result->fetchAll();

        echo "<form action=".$_SERVER['PHP_SELF']." method=\"post\">";
        echo "Nombre: <input type=\"text\" name=\"nombre\" value=".$alumno[0]['nombre'].">";
        echo "Apellidos: <input type=\"text\" name=\"apellidos\" value=".$alumno[0]['apellidos'].">";
        echo "<input type=\"hidden\" name=\"id\" value=".$alumno[0]['id'].">";
        echo "<input type=\"submit\" value=\"Aceptar cambios\" name=\"editar\">";
        echo "</form>";

        if($result){
            echo "Registro actualizado correctamente.";
            echo "<br>";
        }
    }

    if(isset($_POST["editar"])){ //PENDIENTE
        $db = conectaDB();

        $consulta = "SELECT * FROM alumnos where id=?";
        $result = $db->query($consulta);
        $alumno = $result->fetchAll();

        echo "<form action=".$_SERVER['PHP_SELF']." method=\"post\">";
        echo "Nombre: <input type=\"text\" name=\"nombre\" value=".$alumno[0]['nombre'].">";
        echo "Apellidos: <input type=\"text\" name=\"apellidos\" value=".$alumno[0]['apellidos'].">";
        echo "<input type=\"hidden\" name=\"id\" value=".$alumno[0]['id'].">";
        echo "<input type=\"submit\" value=\"Aceptar cambios\" name=\"editar\">";
        echo "</form>";

        if($result){
            echo "Registro actualizado correctamente.";
            echo "<br>";
        }
    }

    //Insertar:
    if (isset($_POST['enviar'])) {

        $db = conectaDb();

        $nombre = limpiarDatos($_POST['nombre']);
        $apellidos = limpiarDatos($_POST['apellidos']);

        $cadenaConsulta = 'INSERT INTO alumnos (nombre,apellidos) VALUES(?,?)';

        $consultaPreparada=$db->prepare($cadenaConsulta);
        $consultaPreparada->execute(array($nombre,$apellidos));

        if ($consultaPreparada) {
            echo "<p>Registrado correctamente</p>";
        } else {
            echo "<p>Esto ha petado</p>";
        }
    }

    //Buscar:
    if (isset($_POST['buscar'])) {
        $db = conectaDb();

        echo "Lista completa<br/>";
        $sql = 'SELECT * FROM alumnos';
        $consulta = $db->query($sql);

        $mostrarLista = $consulta->fetchAll();

        foreach ($mostrarLista as $value) {
            echo $value['nombre']." ";
            echo $value['apellidos']."<a href=".$_SERVER['PHP_SELF']."?eliminar=".$value['id']."></a><br/>";
        }

        echo "Buscando a ".$_POST['nombre']."<br/>";
        $sql = "SELECT * FROM alumnos WHERE(nombre LIKE \""."%".$_POST['nombre']."%"."\")";
        $consulta = $db->query($sql);

        $mostrarLista = $consulta->fetchAll();

        foreach ($mostrarLista as $value) {
            echo $value['nombre']." ";
            echo $value['apellidos']."<br/>";
        }

    }
    
    
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        Nombre: <input type="text" value="" name="nombre">
        Apellidos: <input type="text" value="" name="apellidos">
        <input type="submit" name="enviar">
    </form>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        Nombre alumno/a a buscar: <input type="text" value="" name="nombre">
        <input type="submit" name="buscar" value="Buscar">
    </form>
</body>
</html>