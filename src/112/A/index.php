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

function foo($s1, $s2)
{
    return strcasecmp($s1, $s2);
}

$r = 0;

list($s1) = fscanf($input, "%s\n");
list($s2) = fscanf($input, "%s");

$r = foo($s1, $s2);

fwrite($output, $r === 0 ? 0 : ($r < 0 ? -1 : 1));
