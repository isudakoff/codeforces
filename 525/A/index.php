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
$doors = $keys = [];

list($n) = fscanf($input, "%d\n");
list($s) = fscanf($input, "%s");

$c = 0;

for ($i = 0; $i < strlen($s) - 1; $i += 2) {
    $next = $s[$i + 1];
    $big = strtoupper($s[$i]);

    if ($i % 2 === 0) {
        if ($big !== $next) {
            if (isset($keys[$next]) && $keys[$next] > 0) {
                $keys[$next]--;
            } else {
                $doors[$next] = isset($doors[$next]) ? $doors[$next] + 1 : 1;
                $keys[$big] = isset($keys[$big]) ? $keys[$big] + 1 : 1;
            }
        }
    }
}

$r = array_sum($doors);

fwrite($output, $r);
