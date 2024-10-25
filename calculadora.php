<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora</title>
</head>
<body>
    <h1>Calculadora FullStack</h1>

    <form action="calculadora.php">
        <label>Numero 1</label>
        <input type="text" name="numero1" id="">
        <label>Numero 2</label>
        <input type="text" name="numero2" id="">
        <input type="submit" value="Calcular">

    </form>

<hr>
<p>Resultado da operação</p>

<?php
    if(empty($_POST[""]))
?>
</body>
</html>