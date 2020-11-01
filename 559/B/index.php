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

function foo($s1, $s2)
{
    if ($s1 === $s2) {
        return true;
    }

    $length = strlen($s1);

    $s11 = str_split(substr($s1, 0, round($length / 2)));
    $s12 = str_split(substr($s1, round($length / 2)));

    $s21 = str_split(substr($s2, 0, round($length / 2)));
    $s22 = str_split(substr($s2, round($length / 2)));

    sort($s11);
    sort($s12);
    sort($s21);
    sort($s22);

//    dd($s11, $s12, $s21, $s22, $s1, $s2);
    if (
        (
            count(array_diff($s11, $s21)) === 0 &&
            count(array_diff($s12, $s22)) === 0
        ) || (
            count(array_diff($s11, $s22)) === 0 &&
            count(array_diff($s12, $s21)) === 0
        )
    ) {
        return true;
    }

    return false;
}

$r = 0;

$s1 = trim(fgets($input));
$s2 = trim(fgets($input));

$r = foo($s1, $s2) ? 'YES' : 'NO';

fwrite($output, $r);
