<?php

declare(strict_types=1);

namespace PhpStubs\WordPress\Core\Tests;

use function get_temp_dir;
use function PHPStan\Testing\assertType;

assertType('non-falsy-string', get_temp_dir());
assertType('false', get_temp_dir() === '');
assertType('false', get_temp_dir() === '0');
