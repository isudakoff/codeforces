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

$r = 0;
$a = $b = [];
$max = 0;
$t = 0;

list($n) = fscanf($input, "%d\n");

for ($i = 0; $i < $n; $i++) {
    list($a[$i], $b[$i]) = fscanf($input, "%d %d\n");

    $t -= $a[$i];
    $t += $b[$i];

    if ($t > $max) {
        $max = $t;
    }
}

fwrite($output, $max);

