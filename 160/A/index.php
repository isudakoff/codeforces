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

function foo($a)
{
    rsort($a);

    $me = 0;
    $bro = array_sum($a);
    $i = 0;

    while ($me <= $bro && !empty($a)) {
        $me += $a[$i];
        $bro -= $a[$i];
        unset($a[$i]);
        $i++;
    }

    return $i;
}

$r = 0;

list($n) = fscanf($input, "%d\n");

$a = fscanf($input, trim(str_repeat("%d ", $n)));

$r = foo($a);

fwrite($output, $r);
