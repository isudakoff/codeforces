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

function foo ($n, $k1, $k2)
{
//    dd($n, $k1, $k2);

    $c1 = count($k1);
    $c2 = count($k2);
    $mod = ($c1 + $c2) % 2;
//    $e1 = (int)end($k1);
//    $e2 = (int)end($k2);
    $m1 = (int)max($k1);
    $m2 = (int)max($k2);

//    if ($n === 3)         var_dump($n, end($e), $k2);
//    if ($c1 === $c2) {
//        return max($e1, $e2) === $e1;
//    }

    if ($mod === 1) {
        return $c1 > $c2;
    }

//    dd($n, $k1, $k2, $mod, $c1, $c2, $e1, $e2);

    return $m1 > $m2;
}

$r = 0;

list($t) = fscanf($input, "%d\n");

for ($i = 0; $i < $t; $i++) {
    list($n, $k1, $k2) = fscanf($input, "%d%d%d\n");

//    dd($n, $k1, $k2);
    $kk1 = explode(" ", fgets($input));
    $kk2 = explode(" ", fgets($input));

//    dd($n, str_repeat("%d", $k1), str_repeat("%d", $k2));
    $r = foo((int)$n, $kk1, $kk2) ? 'YES' : 'NO';

    fwrite($output, $r . PHP_EOL);
}
