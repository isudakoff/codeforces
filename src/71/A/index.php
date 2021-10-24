<?php

// php://input or input.txt or STDIN
$input = STDIN;

// php://output or output.txt or STDOUT
$output = STDOUT;

define('MAX_LENGTH', 10);

function foo($s)
{
    $sl = strlen($s);

    if ($sl > MAX_LENGTH) {
        return $s[0] . ($sl - 2) . $s[$sl - 1];
    }

    return $s;
}

$n = fscanf($input, "%d\n");

for ($i = 0; $i < $n[0]; ++$i) {
    $s = fscanf($input, "%s\n");

    $r = foo($s[0]) . PHP_EOL;

    echo $r;
}
