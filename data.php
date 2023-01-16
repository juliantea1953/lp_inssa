<?php


    require 'vendor/autoload.php';

  $connection = new MongoDB\Client("mongodb+srv://invitadoICS:InvICS2020@inssacs.rekt9.mongodb.net");
  $database = $connection->devcrmdb;
  $collection = $database->testphp;

  $nombre = "david";

    $insert = array(
        "nombre" => $nombre,
        "correo" => $_GET['gmail'],
        "celular" => $_GET['cname'],
        "municipio" => $_GET['cage'],
        "ciudad" => $_GET['cagec'],
        "producto" => $_GET["message"],

    );

    $collection->insertOne($insert);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    asdasdasd
    
</body>
</html>