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

function foo($r, $g, $b)
{
    $rt = $r - ($g + $b);
    $gt = $g - ($r + $b);
    $bt = $b - ($r + $g);

    return ($rt >= 2) || ($gt >= 2) || ($bt >= 2);
}

$r = 0;

list($t) = fscanf($input, "%d\n");

for ($i = 0; $i < $t; ++$i) {
    list($r, $g, $b) = fscanf($input, "%d %d %d\n");

    $r = (!foo($r, $g, $b) ? 'Yes' : 'No') . PHP_EOL;

    fwrite($output, $r);
}


