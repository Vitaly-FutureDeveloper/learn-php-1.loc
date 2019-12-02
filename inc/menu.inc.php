<h2>Навигация по сайту</h2>
<!-- Меню -->

<?
    if( !drawMenu($leftMenu) ) //Если не отработало и вернуло false
        trigger_error(ERR_ON_DRAW_MENU, E_USER_ERROR);
        //echo ERR_ON_DRAW_MENU; //Заданная константа с сообщением в data.inc.php
?>

<!-- Меню -->