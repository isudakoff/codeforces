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
$keys = [];

list($n) = fscanf($input, "%d\n");
list($s) = fscanf($input, "%s");

$c = 0;

for ($i = 0; $i < (2 * $n - 2); $i += 2) {
    $key = strtoupper($s[$i]);
    $door = $s[$i + 1];

    if (!isset($keys[$key])) {
        $keys[$key] = 0;
    }

    $keys[$key]++;

    if (!isset($keys[$door]) || !$keys[$door]) {
        $r++;
    } else {
        $keys[$door]--;
    }
}

fwrite($output, $r);
