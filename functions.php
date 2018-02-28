<?php

function task1($param1, $param2 = false)
{
    if($param2) {
        $str = implode(' ', $param1);
        return $str;
    } else {
        for($string_nr = 0; $string_nr < count($param1); $string_nr++) {
            echo "<p>" . $param1[$string_nr] . "</p>";
        }
    }
}


function task2($param1, $param2)
{

    switch ($param2) {
        case($param2 == "+"):
            $result = 0;
            for($array_el = 0; $array_el < count($param1); $array_el++) {
                $result += $param1[$array_el];
            }
            echo $result;
            break;
        case($param2 == "-"):
            $result = 0;
            for($array_el = 0; $array_el < count($param1); $array_el++) {
                $result -= $param1[$array_el];
            }
            echo $result;
            break;
        case($param2 == "*"):
            $result = 1;
            for($array_el = 0; $array_el < count($param1); $array_el++) {
                $result *= $param1[$array_el];
            }
            echo $result;
            break;
        case($param2 == "/"):
            $result = $param1[0] * $param1[0];
            for($array_el = 0; $array_el < count($param1); $array_el++) {
                $result /= $param1[$array_el];
            }
            echo $result;
            break;
        default:
            echo "Неправельные данные";
            break;
    }
}

function task3($parameters)
{
    $data = func_get_args();
    $operator = $data[0];
    array_shift($data);
    task2($data, $operator);
}

function task4($rows_count, $cols_count)
{
    if(is_int($rows_count) && is_int($cols_count)) {
        echo "<table border='1'>";
        for ($row = 1; $row <= $rows_count; $row++) {
            echo "<tr>";
            for ($col = 1; $col <= $cols_count; $col++) {
                echo "<td>" . $result = $row * $col . "</td>";
            }
            echo "</tr>";
        }
        echo "</table>";
    } else {
        echo "Введите целые числа";
    }
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