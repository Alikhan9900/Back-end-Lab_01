
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Task_05</title>
</head>
<body>
<?php
// Генеруємо випадкове тризначне число
$number = mt_rand(100, 999);

// Задача 1: знаходимо суму цифр числа
$sum = array_sum(str_split($number));

// Задача 2: знаходимо число, отримане виписуванням в зворотному порядку цифр даного тризначного натурального числа
$reversed_number = strrev($number);

// Задача 3: переставляємо цифри так, щоб нове число виявилося найбільшим з можливих
$digits = str_split($number);
rsort($digits);
$max_number = implode('', $digits);

// Виводимо результат
echo "<b> Задане число: $number</b> <br>";
echo "1. Сума його цифр: $sum<br>";
echo "2. Число, отримане виписуванням в зворотному порядку цифр: $reversed_number<br>";
echo "3. Найбільше число, отримане після перестановки цифр: $max_number<br>";
?>


</body>
</html>
