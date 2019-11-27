<?php
/*
Объявить переменную $rand и присвоить ей рандомное значение от 1 до 100 (вызов функции rand(1, 100))
Написать алгоритм нахождения суммы чисел от 1 до $rand с помоцью цикла do while. Вывести результат на экран
*/

// Решение задачи

?>

<!DOCTYPE html>

<html>
<head>
    <title>Основы языка PHP</title>
</head>
<body>
<h1>Цикл do while</h1>
<p>
    <?php 
    $rand=rand(1,100);
    echo ($rand. "<br>");
    $i=0;
    $sum=0;
    ?>
    <?php 
do{
   
$sum=$sum+$i;
	 $i++;
  
} while($i<=$rand);


   echo($sum);
  

    

?>
</p>
</body>
</html>