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

function foo($m, $n)
{
    return round($m * $n / 2, 0, PHP_ROUND_HALF_DOWN);
}

$r = 0;

list($m, $n) = fscanf($input, "%d %d");

$r = foo($m, $n);

fwrite($output, $r);
