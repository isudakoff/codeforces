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

list($n, $t) = fscanf($input, "%d %d\n");

list($s) = fscanf($input, "%s");

for ($i = 0; $i < $t; $i++) {
    for ($j = 0; $j < $n - 1; $j++) {
        if ($s[$j + 1] === 'G' && $s[$j] === 'B') {
            $s[$j] = 'G';
            $s[$j + 1] = 'B';
            $j++;
        }
    }
}

fwrite($output, $s);
