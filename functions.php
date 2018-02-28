<?php

function task1($param1, $param2 = false)
{
    if($param2 = false) {
        for($string_nr = 0; $string_nr < count($param1); $string_nr++) {
            echo "<p>" . $param1[$string_nr] . "</p>";
        }
    } else {
        $str = implode(' ', $param1);
        return $str;
    }
}

function task2()
{
    // TODO:
}

function task3()
{
    // TODO:
}

function task4()
{
    // TODO:
}

function task5()
{
    // TODO:
}

function task6()
{
    // TODO:
}

function task7()
{
    // TODO:
}

function task8()
{
    // TODO:
}

function task9()
{
    // TODO:
}