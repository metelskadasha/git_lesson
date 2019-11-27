<?php
/*
Объявить переменную $mark (оценка по пятибальной шкале) и присвоить ей рандомное значение от 1 до 5 (вызов функции rand(1, 5)
В конструкции switch вывести строковое значение оценки,
    типа "Ужасно", "Неудовлетворительно", "Удовлетворительно", "Хорошо" и "Отлично" в завимости от значения переменной $mark
*/

?>

<!DOCTYPE html>

<html>
<head>
    <title>Основы языка PHP</title>
</head>
<body>
    <h1>Конструкция switch</h1>
    <p>
        Рандомная оценка:
        <?php
            $rand=rand(1,5);
            echo($rand);?> <br>
<?php
            switch($rand){
            	case $rand==1:
            		echo"Ужасно";
            		break;
            	case $rand==2:
            		echo "Неудовлетворительно";
            		break;
            	case $rand==3:
            		echo"Удовлетворительно";
            		break;
            	case $rand==4:
            		echo"Хорошо";
            		break;
				case $rand==5:
            		echo"Отлично";
            		break;
            }
        ?>
    </p>
</body>
</html>