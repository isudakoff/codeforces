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
    if ($n % 2 === 0) {
        return 4 * $n + 1;
    }

    if (($n - 1) % 4 === 0) {
        return 2 * $n + 1;
    }

    return $n + 1;
}

$r = 0;

list($t) = fscanf($input, "%d\n");

$n = fscanf($input, trim(str_repeat("%d ", $t)));

for ($i = 0; $i < $t; $i++) {

    $r = foo($n[$i]);

    fwrite($output, $r . PHP_EOL);
}

