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


function foo($k, $n, $w)
{
    $c = 0;

    for ($i = 1; $i < $w + 1; $i++) {
        $c += $i * $k;
    }

    $c = $c - $n;

    return $c <= 0 ? 0 : $c;
}

$r = 0;

list($k, $n, $w) = fscanf($input, "%d %d %d");

$r = foo($k, $n, $w);

fwrite($output, $r);
