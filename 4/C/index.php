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

function foo($name, &$names)
{
    if (isset($names[$name])) {
        $names[$name]++;

        return $name . $names[$name];
    }

    $names[$name] = 0;

    return 'OK';
}

$names = [];
$r = 0;

list($n) = fscanf($input, "%d\n");

for ($i = 0; $i < $n; ++$i) {
    list($name) = fscanf($input, "%s\n");

    $r = foo($name, $names);

    fwrite($output, $r . PHP_EOL);
}
