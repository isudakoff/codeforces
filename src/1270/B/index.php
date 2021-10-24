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

$c = 0;
$l = 1;
$r = 1000000;

while ($l != $r) {
    $c++;
    $mid = floor(($l + $r + 1) / 2);

    printf("%d\n", $mid);
    flush();
    fflush($output);

    list($response) = fscanf($input, "%s");

    if (strcmp($response, '<') === 0) {
        $r = $mid - 1;
    } else {
        $l = $mid;
    }

//    fwrite($output, "\n\nl = {$l} | r = {$r}\n\n");
}

fwrite($output, "! {$l}\n");
flush();
fflush($output);
