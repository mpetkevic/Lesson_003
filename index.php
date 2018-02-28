<?php

// Подключаем задания
require_once('functions.php');

// Магия которая пригодится в жизни
ob_start();

// начало вывода первого задания
echo "<div class='jumbotron'>";
task1();
echo "</div>";
// конец вывода первого задания

// начало вывода второго задания
echo "<div class='jumbotron'>";
task2();
echo "</div>";
// конец вывода второго задания

// ...

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
