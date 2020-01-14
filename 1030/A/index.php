<?php

$input = STDIN;
$output = STDOUT;

fgets($input);

$ni = explode(' ', fgets($input));

fwrite($output, in_array(1, $ni) ? 'HARD' : 'EASY');
