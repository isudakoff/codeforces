<?php

function dd(...$args)
{
    var_dump(...$args);
    die;
}

define('TXTIN', fopen('input.txt', 'r'));
define('TXTOUT', fopen('output.txt', 'w'));

//$input = TXTIN;
$input = STDIN;
//$output = TXTOUT;
$output = STDOUT;

function foo($notebooks, $n)
{
    $answer = 1;
    $min = 1001;

    for ($i = 0; $i < $n; $i++) {
        for ($j = $n - 1; $j >= 0; $j--) {
            if (
                $notebooks[$i]['speed'] < $notebooks[$j]['speed'] &&
                $notebooks[$i]['ram'] < $notebooks[$j]['ram'] &&
                $notebooks[$i]['hdd'] < $notebooks[$j]['hdd']
            ) {
                $notebooks[$i]['cost'] = 1001;
            }
        }

        if ($notebooks[$i]['cost'] < $min) {
            $min = $notebooks[$i]['cost'];
            $answer = $i;
        }
    }

    return $answer;
}

$r = 0;
$notebooks = [];

list($n) = fscanf($input, "%d\n");

for ($i = 0; $i < $n; $i++) {
    list(
        $notebooks[$i]['speed'],
        $notebooks[$i]['ram'],
        $notebooks[$i]['hdd'],
        $notebooks[$i]['cost']
    ) = fscanf($input, "%d %d %d %d\n");
}

$r = foo($notebooks, $n);

fwrite($output, $r + 1);
