<?php
/*
Объявить переменную $time
Присвоить переменной $time значение текущего времени (часы). Получить можно с помощью вызова функции date('H')
Обьявить еще одну переменную, в которой будет храниться css класс элемента body
Проверить с помощью if else, если время с 6 до 18 присвоить значение 'day', если с 18 до 6 - значение 'night'
Вывести значение переменной в атрибуте class элемента body
В итоге должна получиться светлая и темная тема страницы, в зависимости от времени суток
*/
$time=date('H');
$css_class= $time<=18? "day" : "night" ;
?>
<!DOCTYPE html>

<html>
<head>
    <title>Конструкция if</title>
    <style>
        body.night {
            background-color: #202020;
            color: #ffffff;
        }
        body.day {
            background-color: #ffffff;
            color: #202020;
        }
    </style>
</head>
<body class="<?php echo ($css_class);?>">

    <h1>Основы языка PHP</h1>
    <p>
        PHP, расшифровывающийся как "PHP: Hypertext Preprocessor" - «PHP: Препроцессор Гипертекста»,
        является распространенным интерпретируемым языком общего назначения с открытым исходным кодом.
        PHP создавался специально для ведения web-разработок и код на нем может внедряться непосредственно в HTML-код.
        Синтаксис языка берет начало из C, Java и Perl, и является легким для изучения.
        Основной целью PHP является предоставление web-разработчикам возможности быстрого создания динамически генерируемых
        web-страниц, однако область применения PHP не ограничивается только этим.
    </p>
</body>
</html>