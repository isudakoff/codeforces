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

function foo($items, $i, &$a)
{
    $answer = null;

    foreach ($items as $j => $item) {
        if ($item == 1) {
            $answer = $a[$i][$j];

            break;
        }
    }

    return $answer;
}

$r = 0;
$a = [
    [4, 3, 2, 3, 4],
    [3, 2, 1, 2, 3],
    [2, 1, 0, 1, 2],
    [3, 2, 1, 2, 3],
    [4, 3, 2, 3, 4],
];

for ($i = 0; $i < 5; $i++) {
    $s = fscanf($input, "%d %d %d %d %d\n");

    $r = foo($s, $i, $a);

    if (!is_null($r)) {
        break;
    }
}

fwrite($output, $r);
