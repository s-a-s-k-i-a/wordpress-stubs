<?php

declare(strict_types=1);

namespace PhpStubs\WordPress\Core\Tests;

use function get_post_statuses;
use function PHPStan\Testing\assertType;

assertType('array{draft: string, pending: string, private: string, publish: string}', get_post_statuses());
assertType("array{'draft', 'pending', 'private', 'publish'}", array_keys(get_post_statuses()));
