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
    $h = $e = $l1 = $l2 = $o = false;

    for ($i = 0; $i < strlen($s); $i++) {
        if ($s[$i] === 'h' && !$h) {
            $h = true;
            continue;
        }

        if ($s[$i] === 'e' && !$e && $h) {
            $e = true;
            continue;
        }

        if ($s[$i] === 'l' && !$l1 && $h && $e) {
            $l1 = true;
            continue;
        }

        if ($s[$i] === 'l' && !$l2 && $h && $e && $l1) {
            $l2 = true;
            continue;
        }

        if ($s[$i] === 'o' && !$o && $h && $e && $l1 && $l2) {
            $o = true;
            continue;
        }
    }

//    dd($h, $e, $l1, $l2, $o);
    return $h && $e && $l1 && $l2 && $o;
}

$r = 0;

list($s) = fscanf($input, "%s\n");

$r = foo($s) ? 'YES' : 'NO';

fwrite($output, $r);

