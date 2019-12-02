<?php
const ERR_ON_DRAW_MENU = "Sorry... Your site not working";
//Меню
      $leftMenu = [
            ['link' => 'Домой', 'href' => 'index.php'], //0
            ['link' => 'О нас', 'href' => 'index.php?id=about'], //1
            ['link' => 'Контакты', 'href' => 'index.php?id=contact'], //2
            ['link' => 'Таблица умножения', 'href' => 'index.php?id=table'], //3
            ['link' => 'Кальклятор', 'href' => 'index.php?id=calc'] //4
        ];

//Установка локали и выбор значений даты...
setlocale(LC_ALL, "russian");

$day = strftime('%d');
$mon = iconv ('Windows-1251','utf-8', strftime('%B'));
$year = strftime('%Y');

/*
*Получаем текущий час в виде строки от 00 до 23
*и приводим строку к целому числу от 0 до 23
*/
$hour = (int) strftime('%H');
$wellcome = ''; //Инициализируем переменную для приветствия

if ( $hour < 6 ) {
    $wellcome = "Доброй ночи";
}
elseif ( $hour >= 6 && $hour < 12 ) {
    $wellcome = "Доброе утро";
}
elseif ( $hour >= 12 && $hour < 18 ) {
    $wellcome = "Добрый день";
}
elseif ( $hour >= 18 && $hour <= 23 ) {
    $wellcome = "Добрый вечер";
}
else {
    $wellcome = "Приветик";
}