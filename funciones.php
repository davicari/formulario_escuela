<?php
include_once 'config.php';



function GetHTMLProductoTiposSelectOptions(){

$htmlReturn = "";

$pdo = new PDO("mysql:host=".DATABASE_SERVER.";dbname=".DATABASE_NAME,DATABASE_USER,DATABASE_PASSWORD);
$pdo->setAttribute(PDO::MYSQL_ATTR_USE_BUFFERED_QUERY, false);
$unbufferedResult = $pdo->query("SELECT * FROM ".DATABASE_NAME.".producto_tipo");

foreach ($unbufferedResult as $row) {
    //$htmlReturn .= "<option value='".$row["id_producto_tipo"]."'>".$row["nombre"]."</option>";
    $value = $row["id_producto_tipo"];
    $description = $row["nombre"];
    $htmlReturn .= "<option value='$value'>$description</option>";
}

return $htmlReturn;

}

