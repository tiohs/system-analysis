<?php
    echo "O fatorial de ".$_GET['valor']." é ".factorial((int)$_GET['valor']);
    function factorial ($numero) {
        if($numero == 1 || $numero == 0) {
            return 1;
        }else {
            return $numero * factorial($numero - 1);
        }
    }
?>

<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hello Word ! </title>
</head>
<body>
    <form method="GET" action="index.php"> 
        <input type="text" name="valor" >
        <input type="submit" value="Enviar">
    </form>
</body>
</html>