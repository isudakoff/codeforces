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

list($n, $m, $k) = fscanf($input, "%d %d %f\n");

for ($i = 0; $i < $n; $i++) {
    list($name, $exp) = fscanf($input, "%s %d\n");

    $expK = $exp * $k;

    if ($expK > 100) {
        $skills[$name] = (int)$expK;
    }
}

for ($i = 0; $i < $m; $i++) {
    $name = trim(fgets($input));

    $skills[$name] = $skills[$name] ?? 0;
}

fwrite($output, count($skills) . PHP_EOL);

ksort($skills);

foreach ($skills as $skill => $value) {
    fwrite($output, $skill . ' ' . $value . PHP_EOL);
}
