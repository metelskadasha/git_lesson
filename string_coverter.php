<?php

/*
Написать функцию-конвертер строки.
На входе принимается строка, и режим преобразования.
В зависимости от режима, фукнция будет преобразовывать и возвращать строку:
    1) все символы в верхнем регистре
    2) все символы в нижнем регистре
    3) первый символ строки в верхнем регистре, все остальные в нижнем регистре
    4) первые символы каждого слова в верхнем регистре, все остальные в нижнем регистре
    5) инвертированый регистр всех символов
*/
    function br(){
    	echo "<br>";
    }

function converter($str,$str1){
	echo strtoupper($str);
	br();
	echo strtolower($str1); 
	br();
	echo ucfirst($str);
	br();
	echo ucwords($str);
}

$str= "hello world! how are you?";
$str1= "MY NAME IS DASHA!";
echo converter ($str, $str1);


    
// $str= "hello world! how are you?";
// echo strtoupper($str);
// br();
// $str1= "HELLO WORLD! HOW ARE YOU??";
// echo strtolower($str1); 
// br();
// echo ucfirst($str);
// br();
// echo ucwords($str);



//     $str= "hello world! how are you?";
// function converter ($str, function){
// 	echo $str;
// }
// converter ($str, ucfirst($str));

// ucfirst($str)
// 	$str
// 	print_r($str);

    ?>