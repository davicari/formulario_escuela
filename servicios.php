<?php
include_once 'config.php';
include_once 'funciones.php';

$host = DATABASE_SERVER;
$dbname = DATABASE_NAME;
$username = DATABASE_USER;
$password = DATABASE_PASSWORD;


//No olvidar que para enviar un formulario es necesario definir el atributo "name" a los campos.
print_r($_POST);

$accion = $_POST['accion'];


switch($accion)
{
    case 'guardar':

        try {
            $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            die("Error: " . $e->getMessage());
        }
        
        // Check if the form was submitted
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // Retrieve data from the form
            $nombre = $_POST['nombre'];
            $email = $_POST['email'];
            $id_producto_tipo = $_POST['id_producto_tipo'];
            $mensaje = $_POST['mensaje'];
            $fecha_grabacion = date('Y-m-d H:i:s');
        
            // Prepare an SQL statement for inserting data
            $sql = "INSERT INTO contacto (nombre, email,mensaje,id_producto_tipo,au_insert_date) VALUES (:nombre, :email,:mensaje,:id_producto_tipo,:au_insert_date)";
        
            // Use prepared statements to prevent SQL injection
            $stmt = $pdo->prepare($sql);
        
            // Bind parameters
            $stmt->bindParam(':nombre', $nombre);
            $stmt->bindParam(':email', $email);
            $stmt->bindParam(':id_producto_tipo', $id_producto_tipo);
            $stmt->bindParam(':mensaje', $mensaje);
            $stmt->bindParam(':au_insert_date', $fecha_grabacion);
        
            // Execute the statement
            try {
                $stmt->execute();
                echo "Data inserted successfully!";
            } catch (PDOException $e) {
                die("Error: " . $e->getMessage());
            }

        }

        break;

    case 'descargar':

        break;

    default:
    break;

}



