<?php
//Урок 2. Условия, Массивы, циклы, функции

//1. Реализовать основные 4 арифметические операции в виде функции с тремя параметрами – два параметра это числа, третий – операция. Обязательно использовать оператор return.

function calculate($a, $b, $operation) {
    switch ($operation) {
        case '+':
            return $a + $b;
        case '-':
            return $a - $b;
        case '*':
            return $a * $b;
        case '/':
            if ($b == 0) {
                return 'Ошибка: деление на ноль';
            }
            return $a / $b;
        default:
            return 'Ошибка: неизвестная операция';
    }
}

echo calculate(10, 5, '+') . "\n";
echo calculate(10, 5, '-') . "\n";
echo calculate(10, 5, '*') . "\n";
echo calculate(10, 5, '/') . "\n";

//2. Реализовать функцию с тремя параметрами: function mathOperation($arg1, $arg2, $operation), где $arg1, $arg2 – значения аргументов, $operation – строка с названием операции.
// В зависимости от переданного значения операции выполнить одну из арифметических операций и вернуть полученное значение (использовать switch).

function mathOperation($arg1, $arg2, $operation) {
    switch ($operation) {
        case 'add':
            return $arg1 + $arg2;
        case 'subtract':
            return $arg1 - $arg2;
        case 'multiply':
            return $arg1 * $arg2;
        case 'divide':
            if ($arg2 == 0) {
                return 'Ошибка: деление на ноль';
            }
            return $arg1 / $arg2;
        default:
            return 'Ошибка: неизвестная операция';
    }
}

// Примеры вызова функции
echo mathOperation(10, 5, 'add') . "\n";
echo mathOperation(10, 5, 'subtract') . "\n";
echo mathOperation(10, 5, 'multiply') . "\n";
echo mathOperation(10, 5, 'divide') . "\n";

//3. Объявить массив, в котором в качестве ключей будут использоваться названия областей, а в качестве значений – массивы с названиями городов из соответствующей области.
// Вывести в цикле значения массива, чтобы результат был таким: Московская область: Москва, Зеленоград, Клин Ленинградская область:
// Санкт-Петербург, Всеволожск, Павловск, Кронштадт Рязанская область … (названия городов можно найти на maps.yandex.ru).

$regions = [
    'Московская область' => ['Москва', 'Зеленоград', 'Клин'],
    'Ленинградская область' => ['Санкт-Петербург', 'Всеволожск', 'Павловск', 'Кронштадт'],
    'Рязанская область' => ['Рязань', 'Касимов', 'Скопин', 'Шацк'],
    'Краснодарский край' => ['Краснодар', 'Сочи', 'Анапа', 'Геленджик'],
    'Свердловская область' => ['Екатеринбург', 'Нижний Тагил', 'Каменск-Уральский', 'Серов']
];

foreach ($regions as $region => $cities) {
    echo "$region: " . implode(', ', $cities) . "\n";
}

//4. Объявить массив, индексами которого являются буквы русского языка, а значениями – соответствующие латинские буквосочетания
// (‘а’=> ’a’, ‘б’ => ‘b’, ‘в’ => ‘v’, ‘г’ => ‘g’, …, ‘э’ => ‘e’, ‘ю’ => ‘yu’, ‘я’ => ‘ya’). Написать функцию транслитерации строк.

$translitMap = [
    'а' => 'a',  'б' => 'b',  'в' => 'v',  'г' => 'g',
    'д' => 'd',  'е' => 'e',  'ё' => 'yo', 'ж' => 'zh',
    'з' => 'z',  'и' => 'i',  'й' => 'y',  'к' => 'k',
    'л' => 'l',  'м' => 'm',  'н' => 'n',  'о' => 'o',
    'п' => 'p',  'р' => 'r',  'с' => 's',  'т' => 't',
    'у' => 'u',  'ф' => 'f',  'х' => 'kh', 'ц' => 'ts',
    'ч' => 'ch', 'ш' => 'sh', 'щ' => 'shch', 'ъ' => '',
    'ы' => 'y',  'ь' => '',   'э' => 'e',  'ю' => 'yu',
    'я' => 'ya'
];
function transliterate($str, $translitMap) {
    $str = mb_strtolower($str, 'UTF-8');
    $transliterated = strtr($str, $translitMap);
    return $transliterated;
}

echo transliterate('Привет, как дела?', $translitMap) . "\n";