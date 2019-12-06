<?php
/*
С помощью двух циклов for (один вложен в другой) написать алгоритм вывода на экран таблицы умножения
Оформить можно с помощью html элементов table или через кастомный css

Дополнительно. Выделить первый ряд и первую колонку дополнительным цветом

*/


?>

<!DOCTYPE html>

<html>
<head>
    <title>Основы языка PHP</title>
    <style>

    </style>

</head>
<body>
	<h1>Цикл for</h1>
<table border="2px" bordercolor="#00FA9A">
	<?php
for ($i=1; $i<=10; $i++){
	for ($j=1; $j<=10; $j++){
		echo ("<td>". $i*$j. "</td>");
	} echo ("</tr>");
}

	?>
</table>
	

<!-- <?php

$table = '<table border="1">';

for ($tr=1; $tr<=10; $tr++){
    $table .= '<tr>';
    for ($td=1; $td<=10; $td++){
        $table .= '<td>'. $tr*$td .'</td>';
    }
    $table .= '</tr>';
}

$table .= '</table>';
echo $table; 

?> -->
</body>
</html>