<?php

function dd(...$args)
{
    vd(...$args);
    die;
}
function vd(...$args)
{
    var_dump(...$args);
}

define('TXTIN', fopen('input.txt', 'r'));
define('TXTOUT', fopen('output.txt', 'w'));

//$input = TXTIN;
$input = STDIN;
//$output = TXTOUT;
$output = STDOUT;

$t = [
    0 => [],
];
$maxPerson = null;

list($n) = fscanf($input, "%d\n");

for ($i = 1; $i <= $n; ++$i) {
    list($person, $points) = fscanf($input, "%s %d\n");

    $t[$i] = $t[$i - 1];

    if (isset($t[$i][$person])) {
        $t[$i][$person] += $points;
    } else {
        $t[$i][$person] = $points;
    }
}

$end = end($t);
$finalsMax = max($end);
$leaders = array_keys($end, $finalsMax);

//dd($t, $end, $finalsMax, $leaders);

foreach ($t as $k => $v) {
    foreach ($v as $person => $points) {
        if ($points >= $finalsMax && in_array($person, $leaders)) {
            $maxPerson = $person;
            break;
        }
    }

    if ($maxPerson) {
        break;
    }
}

//dd($t, $end, $finalsMax);

fwrite($output, $maxPerson);