<?php

// php://input or input.txt or STDIN
$input = STDIN;

// php://output or output.txt or STDOUT
$output = STDOUT;

function foo($w)
{
    return ($w & 1) === 0 && ($w > 2) ? 'YES' : 'NO';
}

$w = fread($input, 3);

$result = foo((int)$w);

fwrite($output, $result);
