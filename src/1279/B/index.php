<?php

function dd(...$args)
{
    var_dump(...$args);
    die;
}

define('TXTIN', fopen('input.txt', 'r'));
define('TXTOUT', fopen('output.txt', 'w'));

$input = TXTIN;
//$input = STDIN;

$output = TXTOUT;
//$output = STDOUT;

function foo($a, $s)
{
    $best = $bestIndex = $max = $maxIndex = -1;
    $sum = 0;

    for ($i = 0; $i < count($a); ++$i) {
        $sum += $a[$i];

        if ($a[$i] > $max) {
            $max = $a[$i];
            $maxIndex = $i;
        }

        if ($sum <= $s && $i + 1 > $best) {
            $best = $i + 1;
            $bestIndex = -1;
        }

        if ($sum - $max <= $s && $i > $best) {
            $best = $i;
            $bestIndex = $maxIndex;
        }
    }

    return $bestIndex + 1;
}

$r = 0;

list($t) = fscanf($input, "%d\n");

for ($i = 0; $i < $t; ++$i) {
    list($n, $s) = fscanf($input, "%d %d\n");

    $a = fscanf($input, trim(str_repeat("%d ", $n)) . PHP_EOL);

    $r = foo($a, $s);

    fwrite($output, $r . PHP_EOL);
}


