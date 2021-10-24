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

function foo($s)
{
    $newS0 = strtoupper($s[0]);
    $s[0] = $newS0;

    return $s;
}

$r = 0;

list($s) = fscanf($input, "%s");

if ($s === null) {
    $r = '';
} else {
    $r = foo($s);
}

fwrite($output, $r);

