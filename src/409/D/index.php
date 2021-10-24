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

function foo($n)
{
    return
        $n === 1 ||
        $n === 2 ||
        $n === 3 ||
        $n === 4 ||
        $n === 6 ||
        $n === 8 ||
        $n === 10;
}

$r = 0;

$n = fscanf($input, "%d");

$r = foo($n);

fwrite($output, (int)$r);

