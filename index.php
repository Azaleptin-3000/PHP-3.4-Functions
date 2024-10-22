<?php
function multiply($a, $b) {
    return $a * $b;
}

// Пример вызова функции
echo multiply(3, 4); // Ожидаемый результат: 12
?>

<?php
$globalVar = 50; // Глобальная переменная

function sumGlobal() {
    global $globalVar; // Доступ к глобальной переменной
    $localVar = 100; // Локальная переменная
    return $globalVar + $localVar; // Возврат суммы
}

// Пример вызова функции
echo sumGlobal(); // Ожидаемый результат: 150
?>

<?php
function factorial($n) {
    // Базовый случай: если $n меньше или равно 1, возвращаем 1
    if ($n <= 1) {
        return 1;
    }
    // Рекурсивный вызов: $n умножаем на результат вызова factorial($n - 1)
    return $n * factorial($n - 1);
}

// Пример вызова функции
echo factorial(5); // Ожидаемый результат: 120
?>

<?php
$array = ["apple", "banana", "cherry"];

$result = array_map(function($item) {
    return strtoupper($item); // Перевод строки в верхний регистр
}, $array);

print_r($result); // Ожидаемый результат: ["APPLE", "BANANA", "CHERRY"]
?>

<?php
$sum = fn($a, $b) => $a + $b;

// Пример вызова функции
echo $sum(3, 4); // Ожидаемый результат: 7
?>

<?php
function counter() {
    $count = 0; // Инициализация счётчика
    return function() use (&$count) { // Используем замыкание с доступом к $count
        $count++; // Увеличиваем счётчик
        return $count; // Возвращаем текущее значение счётчика
    };
}

$myCounter = counter(); // Создаём новый счётчик

echo $myCounter(); // Ожидаемый результат: 1
echo "\n";
echo $myCounter(); // Ожидаемый результат: 2
echo "\n";
echo $myCounter(); // Ожидаемый результат: 3
?>

<?php
function generateNumbers() {
    for ($i = 1; $i <= 5; $i++) { // Цикл от 1 до 5
        yield $i; // Возвращаем текущее значение $i с помощью yield
    }
}

$generator = generateNumbers(); // Создаём генератор

foreach ($generator as $number) {
    echo $number . " "; // Ожидаемый результат: 1 2 3 4 5
}
?>

<?php
$array = [3, 7, 2, 8, 4, 10, 1];

$minValue = min($array); // Поиск минимального значения
$maxValue = max($array); // Поиск максимального значения

echo "Минимум: " . $minValue . "\n"; // Ожидаемый результат: Минимум: 1
echo "Максимум: " . $maxValue . "\n"; // Ожидаемый результат: Максимум: 10
?>
