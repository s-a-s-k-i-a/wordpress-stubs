<?php

declare(strict_types=1);

namespace PhpStubs\WordPress\Core\Tests;

use function get_comment_statuses;
use function PHPStan\Testing\assertType;

assertType('array{hold: string, approve: string, spam: string, trash: string}', get_comment_statuses());
assertType("array{'hold', 'approve', 'spam', 'trash'}", array_keys(get_comment_statuses()));
