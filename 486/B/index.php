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

function fillAi($n, $bi)
{
    $sum = array_sum($bi);

    return $sum < $n ? array_fill(0, $n, 0) : $bi;
}

function fillFinal($n, $bi, $min)
{
    return $min === 0 ? array_fill(0, $n, 0) : $bi;
}

$r = 0;
$sum = 0;
$a = $b = $c = $min = [];

list($m, $n) = fscanf($input, "%d %d\n");

for ($i = 0; $i < $m; $i++) {
    $b[$i] = fscanf($input, trim(str_repeat("%d ", $n)));
    $a[$i] = fillAi($n, $b[$i]);
    $min[$i] = min($b[$i]);
}

for ($j = 0; $j < $n; $j++) {
    $c[$j] = fillAi($m, array_column($b, $j));
}

for ($i = 0; $i < $m; $i++) {
    $a[$i] = fillFinal($n, array_column($c, $i), $min[$i]);
    $sum += array_sum($a[$i]);
}

//dd($b, $a, $c);

if ($sum === 0) {
    if ($n === 1 && $m === 1) {
        goto yes;
    }

    fwrite($output, 'NO');
} else {
    yes:
    fwrite($output, 'YES' . PHP_EOL);

    for ($i = 0; $i < $m; $i++) {
        for ($j = 0; $j < $n; $j++) {
            fwrite($output, $a[$i][$j]);

            if ($j + 1 < $n) {
                fwrite($output, ' ');
            }
        }

        fwrite($output, PHP_EOL);
    }
}
