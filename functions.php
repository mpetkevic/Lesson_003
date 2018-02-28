<?php

function task1($parameters)
{
    $data = func_get_args();
    if (count($data) > 1 && $data[1] == 1 ) {
        $str = implode(' ', $data[0]);
        return $str;
    } else {
        foreach ($data[0] as $item) {
            echo "<p>" . $item . "</p>";
        }
    }

}


function task2($intArray, $operator)
{

    switch ($operator) {
        case("+"):
            $result = 0;
            for($array_el = 0; $array_el < count($intArray); $array_el++) {
                $result += $intArray[$array_el];
            }
            echo $result;
            break;
        case("-"):
            $result = 0;
            for($array_el = 0; $array_el < count($intArray); $array_el++) {
                $result -= $intArray[$array_el];
            }
            echo $result;
            break;
        case("*"):
            $result = 1;
            for($array_el = 0; $array_el < count($intArray); $array_el++) {
                $result *= $intArray[$array_el];
            }
            echo $result;
            break;
        case("/"):
            $result = $intArray[0] * $intArray[0];
            for($array_el = 0; $array_el < count($intArray); $array_el++) {
                $result /= $intArray[$array_el];
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

function task4($rowsCount, $colsCount)
{
    if(is_int($rowsCount) && is_int($colsCount)) {
        echo "<table border='1'>";
        for ($row = 1; $row <= $rowsCount; $row++) {
            echo "<tr>";
            for ($col = 1; $col <= $colsCount; $col++) {
                echo "<td>" . $result = $row * $col . "</td>";
            }
            echo "</tr>";
        }
        echo "</table>";
    } else {
        echo "Введите целые числа";
    }
}


function task5_1($str)
{

    $lng = strlen($str);
    $symbols = 2;
    if($lng < $symbols) {
        return true;
    } else {

        $new_str = str_replace(" ", "", $str);
        $new_str2 = strtolower($new_str);
        $start = 0;
        $end = -1;
        if ($new_str2[$start] == $new_str2[$end]) {
            $from_start = substr($new_str2, 1);
            $from_end = substr_replace($from_start, "", -1);
            return task5_1($from_end);


        } else {
            return false;
        }
    }

}

function task5_2($answer, $str)
{
    if($answer) {
        echo "Строка " . "\"" .$str . "\"" . " является палиндромом";
    } else {
        echo "Строка " . "\"" .$str . "\"" . " не является палиндромом";
    }
}

function task6($unixTime)
{
    echo "Now date and time: " . date('d.m.Y') . " " . date('h:m') . "<br>";
    $unix = new DateTime($unixTime);
    $display_unix = $unix->getTimestamp();
    //var_dump($unix->getTimestamp());
    echo "Unix time of " . $unixTime . " is: " . $display_unix;
}

function task7($text1, $text2)
{
    $newText1 = str_replace("К", "", $text1);
    echo $newText1 . "<br>";
    $newText2 = str_replace("Две", "Три", $text2);
    echo $newText2;
}

function task8($path)
{
    $handle = fopen($path, "r");
    $text = fread($handle, 1024);

    fclose($handle);
    echo $text;
}

function task9()
{
    $handle = fopen("./anothertest.txt", "a");
    $text = "Hello world!";
    fwrite($handle, $text);
    fclose($handle);

}