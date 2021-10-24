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

function foo($p, $v, $t)
{
    return ($p + $v + $t) >= 2;
}

$c = 0;

list($n) = fscanf($input, "%d\n");

for ($i = 0; $i < $n; ++$i) {
    list($p, $v, $t) = fscanf($input, "%d %d %d\n");

    $c += foo($p, $v, $t) ? 1 : 0;
}

fwrite($output, $c);
