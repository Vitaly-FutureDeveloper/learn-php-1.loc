<?php

//Лабораторная работа 2.5
$size = ini_get("post_max_size"); //100M Взяли из PHP.ini максимальный размер отправляемой формы
$letter = $size{strlen($size)-1}; //M Взяли последнюю букву из переменной

$size = (int)$size; //100

switch (strtoupper($letter)) {
    case "G":
        $size = $size * 1024;
        
    case "M":
        $size *=1024;
        
    case "K":
        $size *= 1024;
        
}
///////////////////////////////////


?>


<!DOCTYPE html>
<html>

<head>
    <title>Контакты</title>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="style.css" />
</head>

<body>

   
        <!-- Верхняя часть страницы -->
       
        <!-- Верхняя часть страницы -->
    

  
        <!-- Заголовок -->
       
        <!-- Заголовок -->
        <!-- Область основного контента -->
        <h3>Адрес</h3>
        <p>123456 Москва, Малый Американский переулок 21</p>
        <h3>Задайте вопрос</h3>
        <form action='' method='post'>
            <label>Тема письма: </label>
            <br />
            <input name='subject' type='text' size="50" />
            <br />
            <label>Содержание: </label>
            <br />
            <textarea name='body' cols="50" rows="10"></textarea>
            <br />
            <br />
            <input type='submit' value='Отправить' />
        </form>
        <div class="maxsize">
            <p><?= "Максимальный размер для отправки: $size" ?></p>
        </div>
     
        <!-- Область основного контента -->

        <!-- Меню -->

    
        <!-- Меню -->
    
        <!-- Нижняя часть страницы -->
       
        <!-- Нижняя часть страницы -->
    
</body>

</html>
