<?php 

require_once('vendor/autoload.php');

$grupo = new Grupo();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h2>Tu equipo se compone de: </h2>
    <hr>

    <?php
        $grupo->buscar($_POST['cantidad'], $_POST['especialidad']);
    ?>

</body>
</html>