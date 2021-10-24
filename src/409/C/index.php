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

function foo($a)
{
    $r = 1000000000;
    $b = [1, 1, 2, 7, 4];

    for($i = 0; $i < 5; $i++) {
        $r = min($r, floor($a[$i] / $b[$i]));
    }

    return $r;
}

$r = 0;
$a = [];

$a = array_map('trim', explode(' ', fgets($input)));

$r = foo($a);

fwrite($output, $r);

