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

function foo($n, $k)
{
    $od = $n % $k;
    $c = floor($k / 2);

    return $n - $od + min($od, $c);
}

$r = 0;

list($t) = fscanf($input, "%d\n");

for ($i = 0; $i < $t; ++$i) {
    list($n, $k) = fscanf($input, "%d %d\n");

    $r = foo($n, $k);

    fwrite($output, $r . PHP_EOL);
}
