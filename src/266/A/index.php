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

function foo($n, $s)
{
    $c = 0;
    $ss = $s[0];

    for ($i = 0; $i < $n - 1; $i++) {
        if ($s[$i + 1] === $ss) {
            $c++;
        } else {
            $ss = $s[$i + 1];
        }
    }

    return $c;
}

$r = 0;

list($n) = fscanf($input, "%d\n");
list($s) = fscanf($input, "%s");

$r = foo($n, $s);

fwrite($output, $r);

