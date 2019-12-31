<?php

// php://input or input.txt or STDIN
$input = STDIN;

// php://output or output.txt or STDOUT
$output = STDOUT;

function bcceil($number)
{
    if (strpos($number, '.') !== false) {
        if (preg_match("~\.[0]+$~", $number)) return bcround($number, 0);
        if ($number[0] != '-') return bcadd($number, 1, 0);
        return bcsub($number, 0, 0);
    }
    return $number;
}

function bcround($number, $precision = 0)
{
    if (strpos($number, '.') !== false) {
        if ($number[0] != '-') return bcadd($number, '0.' . str_repeat('0', $precision) . '5', $precision);
        return bcsub($number, '0.' . str_repeat('0', $precision) . '5', $precision);
    }
    return $number;
}

function foo($n, $m, $a)
{
    $s = bcceil(bcdiv($n, $a, 100));
    $p = bcceil(bcdiv($m, $a, 100));

    return bcceil(bcmul($s, $p));
}

$w = fread($input, 32);

list($n, $m, $a) = explode(" ", trim($w));

$result = foo($n, $m, $a);

fwrite($output, $result === "0" ? "1" : $result);
