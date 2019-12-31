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

function foo($x, $y, $z)
{
    $x_sum = array_sum($x);
    $y_sum = array_sum($y);
    $z_sum = array_sum($z);

    return $x_sum === 0 && $y_sum === 0 && $z_sum === 0;
}

$r = 0;
$x = $y = $z = [];

list($n) = fscanf($input, "%d\n");

for ($i = 0; $i < $n; $i++) {
    list($x[$i], $y[$i], $z[$i]) = fscanf($input, "%d %d %d\n");
}

$r = foo($x, $y, $z) ? 'YES' : 'NO';

fwrite($output, $r);

