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
    return (count(array_unique(str_split($s))) % 2) === 0;
}

$r = 0;

list($s) = fscanf($input, "%s");

$r = foo($s) ? 'CHAT WITH HER!' : 'IGNORE HIM!';

fwrite($output, $r);

