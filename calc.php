<?php
//set_error_handler("0");
if ($_SERVER ['REQUEST_METHOD'] == "POST") 
  $a = true; //для калькулятора - если приняли данные то считаем

$num1 = (float) trim(strip_tags($_POST['num1']));//Присваиваем переменной $num1, сразу преобразуем в вещественное число, фильтруем (удаляем пробелы, удаляем теги), Принимая из массива ПОСТ
$num2 = (float) trim(strip_tags($_POST['num2']));
$operator = (string) trim(strip_tags($_POST['operator']));


?>

    <h4>Результаты расчётов:</h4>
    <div class="results">
        <p>
          <? 
          calc($num1, $num2, $operator, $a);
          ?>
        </p>
    </div>

    <form action='<?  echo $_SERVER['REQUEST_URI'];  ?>' method="POST">
      <label>Число 1:</label>
      <br />
      <input name='num1' type='text' />
      <br />
      <label>Оператор: </label>
      <br />
      <input name='operator' type='text' />
      <br />
      <label>Число 2: </label>
      <br />
      <input name='num2' type='text' />
      <br />
      <br />
      <input type='submit' value='Считать'>
    </form>

</body>

</html>