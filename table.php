<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $cols = abs((int) $_POST['cols']);
    $rows = abs((int) $_POST['rows']);
    $color = abs((int) $_POST['color']);
}
$cols = ($cols) ? $cols : 10;
$rows = ($rows) ? $rows : 10;
$color = ($color) ? $color : 'yellow';

?>

<!DOCTYPE html>
<html>

<head>
    <title>Таблица умножения</title>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="style.css" />
</head>

<body>


        <!-- Верхняя часть страницы -->

        <!-- Верхняя часть страницы -->
  

        <!-- Заголовок -->
       
        <!-- Заголовок -->
        <!-- Область основного контента -->
        <form action='<? echo $_SERVER['REQUEST_URI']; ?>' method="post">
            <label>Количество колонок: </label>
            <br />
            <input name='cols' type='text' value="" />
            <br />
            <label>Количество строк: </label>
            <br />
            <input name='rows' type='text' value="" />
            <br />
            <label>Цвет: </label>
            <br />
            <input name='color' type='text' value="" />
            <br />
            <br />
            <input type='submit' value='Создать' />
        </form>
        <!-- Таблица -->

        <?php
        drawTable($cols, $rows, $color);
        ?>

        <!-- Таблица -->
        <!-- Область основного контента -->
   
        <!-- Меню -->
      
        <!-- Меню -->
   
        <!-- Нижняя часть страницы -->
       
        <!-- Нижняя часть страницы -->
    
</body>

</html>
