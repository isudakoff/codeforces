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

function fillA($n, $bi)
{
    $sum = array_sum($bi);

    return $sum < $n ? array_fill(0, $n, 0) : $bi;
}

function fillB($n, $a)
{
    $sum = array_sum($a);

    return $sum > 0 ? array_fill(0, $n, 1) : $a;
}

function fillFinalA($n, $b, $min)
{
    return $min === 0 ? array_fill(0, $n, 0) : $b;
}

function fillFinalB($n, $a, $max)
{
    return $max > 0 ? array_fill(0, $n, 1) : $a;
}

$r = 0;
$sumA = $sumB = 0;
$a = $b = $c = $d = $min = $dd = $bb = $max = [];

list($m, $n) = fscanf($input, "%d %d\n");

for ($i = 0; $i < $m; $i++) {
    $b[$i] = fscanf($input, trim(str_repeat("%d ", $n)));
    $a[$i] = fillA($n, $b[$i]);
    $min[$i] = min($b[$i]);
    $sumB += array_sum($b[$i]);
}

for ($j = 0; $j < $n; $j++) {
    $c[$j] = fillA($m, array_column($b, $j));
}

for ($i = 0; $i < $m; $i++) {
    $a[$i] = fillFinalA($n, array_column($c, $i), $min[$i]);
    $sumA += array_sum($a[$i]);
}

$c = [];

for ($i = 0; $i < $m; $i++) {
    $d[$i] = fillB($n, $a[$i]);
    $max[$i] = max($a[$i]);
}

for ($j = 0; $j < $n; $j++) {
    $c[$j] = fillB($m, array_column($a, $j));
}

for ($i = 0; $i < $m; $i++) {
    $d[$i] = fillFinalB($n, array_column($c, $i), $max[$i]);
}

for ($i = 0; $i < $m; $i++) {
    for ($j = 0; $j < $n; $j++) {
        $dd[] = $d[$i][$j];
        $bb[] = $b[$i][$j];
    }
}

if (implode(' ', $dd) !== implode(' ', $bb)) {
    fwrite($output, 'NO');
} else {
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
