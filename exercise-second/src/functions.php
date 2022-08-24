<?php
ini_set('display_errors', 1);

function task1($str_array, $print = false)
{
    $result = array_map(function($item) {
        return "<p>$item</p>";
    }, $str_array);

    if (!$print) {
        return $result;
    }

    echo implode(' ', $result);
}

function task2($operator, ...$args)
{
    switch ($operator) {
        case '+':
            return array_sum($args);
            break;
        case '-':
            return array_shift($args) - array_sum($args);
            break;
        case '/':
            $res = array_shift($args);

            if ($res === 0) {
                throw new Exception('dividing by zero');
            }

            foreach($args as $arg) {
                $res /= $arg;
            }

            return $res;
            break;
        case '*':
            $res = array_shift($args);

            foreach($args as $arg) {
                $res *= $arg;
            }

            return $res;
            break;
        default:
            return 'unknown operator';
            break;
    }
}

function task3(int $row_size, int $col_size)
{
    echo '<table border=1>';
    for ($i = 1; $i <= $row_size; $i++) {
        echo '<tr>';
        for ($mult = 1; $mult <= $col_size; $mult++) {
            echo "<td> $mult * $i = " . $i * $mult . '</td>';
        }
        echo '</tr>';
    }
    echo '</table>';
}

// Task 3 recursion
function render_row($size, $i = 0)
{
    if ($i < $size) {
        $i++;
        echo '<tr>' . render_col($size, $i) . '</tr>';
        return render_row($size, $i);
    }
}

function render_col($size, $mult, $i = 0)
{
    if ($i < $size) {
        $i++;
        return "<td> $i * $mult = " . $i * $mult . '</td>' . render_col($size, $mult, $i);
    }
}


function task_3_rec(int $size)
{
    echo '<table border=1>';
    echo render_row($size);
    echo '</table>';
}

function read_file($filename) {
    $fp = fopen($filename, 'r');
    $str = '';

    while (!feof($fp)) {
        $str .= fgets($fp, 1024);
    }

    fclose($fp);
    echo $str;
}