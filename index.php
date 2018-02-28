<?php

// Подключаем задания
require_once('functions.php');

// Магия которая пригодится в жизни
ob_start();

$strings_array = ['one', 'two', 'three', 'four', 'five'];
$intArray = [12, 45, 53, 45];
$aritOperator = "/";
$str = "abracadacarba gdfs";
$answer_5_1 = task5_1($str);
$unixTime = "24.02.2016 00:00:00";
$text1 = "Карл у Клары украл Кораллы";
$text2 = "Две бутылки лимонада";
$path = "./test.txt";


// начало вывода первого задания
echo "<div class='jumbotron'>";
task1($strings_array, true);
echo "</div>";
// конец вывода первого задания

// начало вывода второго задания
echo "<div class='jumbotron'>";
task2($intArray, $aritOperator);
echo "</div>";
// конец вывода второго задания

// начало вывода третего задания
echo "<div class='jumbotron'>";
task3("/", 4, 5, 6, 7);
echo "</div>";
// конец вывода третего задания

// начало вывода четвертого задания
echo "<div class='jumbotron'>";
task4(10, 6);
echo "</div>";
// конец вывода четвертого задания

// начало вывода пятого задания
echo "<div class='jumbotron'>";
task5_2($answer_5_1, $str);
echo "</div>";
// конец вывода пятого задания

// начало вывода шестого задания
echo "<div class='jumbotron'>";
task6($unixTime);
echo "</div>";
// конец вывода шестого задания

// начало вывода седбмого задания
echo "<div class='jumbotron'>";
task7($text1, $text2);
echo "</div>";
// конец вывода седьмого задания

// начало вывода восьмого задания
echo "<div class='jumbotron'>";
task8($path);
echo "</div>";
// конец вывода восьмого задания

// начало вывода девятого задания
echo "<div class='jumbotron'>";
task9();
echo "</div>";
// конец вывода девятого задания

$content = ob_get_contents();
ob_end_clean();
?>

<!doctype html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Второе домашнее задание от loftschool.com</title>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md">
            <h1>Второе домашнее задание</h1>
            <?= $content ?>
        </div>
    </div>
</div>
</body>
</html>
