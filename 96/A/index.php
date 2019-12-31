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
    $z = strpos($s, '0000000');
    $f = strpos($s, '1111111');

    return $z !== false || $f !== false;
}

$r = 0;

list($s) = fscanf($input, "%s");

$r = foo($s);

fwrite($output, $r ? 'YES' : 'NO');
