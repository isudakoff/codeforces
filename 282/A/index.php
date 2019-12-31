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

function foo($x)
{
    return $x === '++X' || $x === 'X++';
}

$r = 0;

list($n) = fscanf($input, "%d\n");

for ($i = 0; $i < $n; ++$i) {
    list($x) = fscanf($input, "%s\n");

    $r = foo($x) ? $r + 1 : $r - 1;
}

fwrite($output, $r);
