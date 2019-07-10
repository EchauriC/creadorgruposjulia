<!-- PHP 7-->
<?php 

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Randomizer</title>

    <!-- LINKS EXTERNOS -->
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/style.css">

    <!-- FontAwesome -->
</head>
<body>
    
<!-- HEADER -->

    <header class="container">
        <h1>Creador de grupos</h1>
    </header>


<!-- Main -->
<form action="grupo.php" method="post">
    <input type="number" name="numero" id="" placeholder="numero">
    <select name="especialidad" id="">
        <option value="HTML5">HTML5/CSS3</option>
        <option value="Javascript">Javascript</option>
        <option value="PHP">PHP</option>
        <option value="Json">Jason/XML</option>
        <option value="Python">Python</option>
        <option value="Java">Java</option>
        <option value="Sass">Sass/Less</option>
        <option value="Laravel">Laravel</option>
        </select>

    <button type="submit">Enviar</button>

</form>

</body>
</html>