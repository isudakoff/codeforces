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
    $c = 0;

    $have = array_count_values($s);

    // 4
    if (isset($have[4])) {
        $c += $have[4];
        $have[4] = 0;
    }

    // 3 and 1
    if (isset($have[3]) && isset($have[1])) {
        $min_3_1 = min($have[3], $have[1]);
        $c += $min_3_1;
        $have[3] -= $min_3_1;
        $have[1] -= $min_3_1;
    }

    // 2
    if (isset($have[2])) {
        if (($have[2] % 2) === 0) {
            $c += (int)($have[2] / 2);
            $have[2] = 0;
        } elseif ($have[2] > 1) {
            $c += (int)(($have[2] - 1) / 2);
            $have[2] = 1;
        }
    }

    // 1
    if (isset($have[1])) {
        if (isset($have[2])) {
            if ($have[2] > 0 && $have[1] > 1) {
                $min_2_1 = min($have[2], (int)($have[1] / 2));

                if ($min_2_1 > 0) {
                    $have[2] -= $min_2_1;
                    $have[1] -= $min_2_1 * 2;
                    $c += $min_2_1;
                }
            } elseif ($have[2] > 0 && $have[1] > 0) {
                $min_2_1 = min($have[2], $have[1]);

                if ($min_2_1 > 0) {
                    $have[2] -= $min_2_1;
                    $have[1] -= $min_2_1 * 2;
                    $c += $min_2_1;
                }
            }
        }

        $ones = (int)($have[1] / 4);
        $c += $ones;
        $have[1] -= $ones * 4;

        if ($have[1] > 0) {
            $c++;
        }
    }

    if (isset($have[2])) {
        $c += $have[2];
    }

    if (isset($have[3])) {
        $c += $have[3];
    }

    return $c;
}

$r = 0;

list($n) = fscanf($input, "%d\n");

$s = fscanf($input, trim(str_repeat("%d ", $n)));

$r = foo($s);

fwrite($output, $r);
