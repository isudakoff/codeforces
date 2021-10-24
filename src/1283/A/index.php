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

function foo($h, $m)
{
    if ($h == 0 && $m == 0) {
        return 0;
    }

    return 1440 - ($h * 60 + $m);
}

$r = 0;

list($t) = fscanf($input, "%d\n");

for ($i = 0; $i < $t; ++$i) {
    list($h, $m) = fscanf($input, "%d %d\n");

    $r = foo($h, $m);

    fwrite($output, $r . PHP_EOL);
}
