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

list($n, $k) = fscanf($input, "%d %d");

for ($i = 0; $i < $k; $i++) {
    if ($n % 10 === 0) {
        $n /= 10;
    } else {
        $n--;
    }
}

fwrite($output, $n);
