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
    // @cases: h / hELLO
    if ($s[0] === strtolower($s[0])) {
        $ss = substr($s, 1);

        if (
            // @case: h
            $ss === false ||
            // @case: hELLO
            $ss === strtoupper($ss)
        ) {
            return ucfirst(strtolower($s));
        }
    }

    // @case: HTTP
    if ($s === strtoupper($s)) {
        return strtolower($s);
    }

    // other cases
    return $s;
}

$r = 0;

list($s) = fscanf($input, "%s");

$r = foo(trim($s));

fwrite($output, $r);
