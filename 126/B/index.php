<?php

function dd(...$args)
{
    var_dump(...$args);
    die;
}

define('TXTIN', fopen('input.txt', 'r'));
define('TXTOUT', fopen('output.txt', 'w'));

$input = TXTIN;
//$input = STDIN;
$output = TXTOUT;
//$output = STDOUT;

function foo($s)
{
    $result = null;
    $n = strlen($s);
    $sl = (int) ($n / 3) + 1;

    for ($i = 1; $i <= $sl; $i++) {
        $prefix = substr($s, 0, $i);
        $suffix = substr($s, -$i);
        $middle = substr($s, $i, $n - 2 * $i);

        if ($prefix !== $suffix) continue;

        if (substr_count($middle, $prefix) > 0) {
            $result = $prefix;
        }
    }

    return $result;
}

$r = 0;
$keys = [];

list($s) = fscanf($input, "%s");

$r = foo($s) ?: 'Just a legend';

fwrite($output, $r);
