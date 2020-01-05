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

function KMP($s, &$p)
{
    $p[0] = 0;

    for ($i = 1; $i < strlen($s); $i++) {
        $j = $p[$i - 1];

        while ($j && $s[$i] != $s[$j]) {
            $j = $p[$j - 1];
        }

        if ($s[$i] === $s[$j]) {
            $p[$i] = $j + 1;
        } else {
            $p[$i] = $j;
        }
    }
}


function foo($s, &$p)
{
    $l = strlen($s);
    $a = $p[$l - 1];

    while ($a) {
        for ($i = $l - 2; $i >= 0; --$i) {
            if ($p[$i] === $a) {
                break;
            }
        }

        if ($i >= 0) {
            break;
        }

        $a = $p[$a - 1];
    }

    return $a;
}

$r = 0;
$p = [];

list($s) = fscanf($input, "%s");

KMP($s, $p);

$r = foo($s, $p);
$r = $r ? substr($s, 0, $r) : 'Just a legend';

fwrite($output, $r);
