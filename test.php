<?php

declare(strict_types=1);

function blah($input)
{
    switch ($input) {
      case 'one':
        return 'blah_one';
      default:
        return 'blah_default';
    }
}

$x = blah('two');
var_dump($x);

echo "\n";
