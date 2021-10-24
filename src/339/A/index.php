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
    $as = $ass = explode('+', $s);

    sort($ass);

//    dd($as, $ass);

    return implode("+", $ass);
}

$r = 0;

list($s) = fscanf($input, "%s\n");

$r = foo($s);

fwrite($output, $r);
