<?php
/*
//Файл-библиотека для функций
*/

function my_Error ($no, $msg, $file, $line) {
    
    $dt = date("d-m-Y H:i:s");
    $str = "[dt] - $msg in $file:$line\n";
    
    switch ($no) {
        case E_USER_ERROR:
        case E_USER_WARNING:
        case E_USER_NOTICE:
            echo $msg;
    }
error_log("$str", 3, "err.log");
}

function drawTable ( $cols = 10, $rows = 10, $color = "blue" ) {
          
    echo "<table border='1'>";
        
        for ( $tr = 1; $tr <= $rows; $tr++ ) {
            echo "<tr>";
            
            for ( $td = 1; $td <= $cols; $td++ ) {
                if ($td == 1 or $tr == 1) 
                    echo "<th style='color:$color;'>" . $tr*$td . "</th>";
                    
                else
                    echo "<td>" . $tr*$td . "</td>";
            }
            
            echo "</tr>";
        }

    echo "</table>";
}
      

//$menu - массив, содержащий структуру меню
//$vertical - каким образом отрисовывается меню вертикально - true
function drawMenu ( $menu, $vertical=true ) {
    
    if( !is_array($menu) )
        return false; //Если передан не массив - вернёт фолс и продолжит скрипт
    
    $style = "";
    
    if (!$vertical)
        $style = " style='display:inline; margin:10px;'";
    
    echo "<ul>";
      
      foreach($menu as $item) {
          echo "<li$style>";
          echo "<a href='$item[href]'> {$item['link']} </a>";
          echo "</li>";
      }
    
      echo "</ul>";
    return true; //После отработки - вернёт тру
}
//Меню

//Каклькулятор
function calc ($num1, $num2, $operator, $a=false) {

    if(!$a)
      return false; //Если НЕ приняли данные ПОСТом - прерывем функцию

      switch ($operator) {

        case '+' :
          $result = $num1 + $num2;
          echo "$num1 + $num2 = $result";
          break;
  
        case '-' :
          $result = $num1 - $num2;
          echo "$num1 - $num2 = $result";
          break;
  
        case '*' :
          $result = $num1 * $num2;
          echo "$num1 * $num2 = $result";
          break;
  
        case '/' :
          if ($num2 != 0) {
            $result = $num1 / $num2;
            echo "$num1 / $num2 = $result";
          }
          else 
            echo "На ноль делить нельзя";
          break;
  
        default :
          echo "Введён неправильный оператор";
      }
  }