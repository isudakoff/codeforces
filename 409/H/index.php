<?php

$input = STDIN;
$output = STDOUT;

function foo($a, $b)
{
    return $a + $b;
}

$r = 0;
$a = 0;
$b = 0;

fscanf($input, "%d %d", $a, $b);

$r = foo($a, $b);

fwrite($output, $r);

// hmmm ...
