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

$skills = [];

list($n, $m, $k) = fscanf($input, "%d %d %s\n");

for ($i = 0; $i < $n; $i++) {
    list($name, $exp) = fscanf($input, "%s %s\n");

    $expK = bcmul($exp, $k, 2);

    if (bccomp($expK, '100.00', 2) > -1) {
        $skills[$name] = bcadd($expK, '0.00', 0);
    }
}

for ($i = 0; $i < $m; $i++) {
    $name = trim(fgets($input));

    $skills[$name] = $skills[$name] ?? '0';
}

fwrite($output, count($skills) . PHP_EOL);

ksort($skills);

foreach ($skills as $skill => $value) {
    fwrite($output, $skill . ' ' . $value . PHP_EOL);
}
