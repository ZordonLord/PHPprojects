<?php
// В контейнере с PHP CLI поменяйте версию PHP с 8.2 на 7.4. Изменится ли вывод?
// Используя только две числовые переменные, поменяйте их значение местами. Например, если a = 1, b = 2, надо, чтобы получилось: b = 1, a = 2.
// Дополнительные переменные, функции и конструкции типа list() использовать нельзя.

$a = 5;
$b = '05';
var_dump($a == $b);
var_dump((int)'012345');
var_dump((float)123.0 === (int)123.0);
var_dump(0 == 'hello, world');

$a = $a + $b;
$b = $a - $b;
$a = $a - $b;
echo "a = $a, b = $b";

// docker run --rm -v ${pwd}/lesson_01/:/ls php:8.2-cli php ls/index.php
// docker run --rm -v ${pwd}/lesson_01/:/ls php:7.4-cli php ls/index.php