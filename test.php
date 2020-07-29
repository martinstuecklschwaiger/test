<?php

declare(strict_types=1);

function blah($input, $other)
{
    switch ($input) {
      case 'one':
        if ($other === 'one') {
            return 'real_one';
        } else {
            return 'blah_one';
        }

      default:
        return 'blah_default';
    }
}

$x = blah('two', 'something');
var_dump($x);

echo "\n";
