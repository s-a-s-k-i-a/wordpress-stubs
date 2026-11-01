<?php

declare(strict_types=1);

namespace PhpStubs\WordPress\Core\Tests;

use function wp_validate_boolean;
use function PHPStan\Testing\assertType;

assertType('true', wp_validate_boolean(true));
assertType('false', wp_validate_boolean(false));
assertType('bool', wp_validate_boolean(Faker::bool()));

assertType('false', wp_validate_boolean(''));
assertType('false', wp_validate_boolean('0'));
assertType('false', wp_validate_boolean('false'));
assertType('false', wp_validate_boolean('FALSE'));
assertType('true', wp_validate_boolean('value'));
assertType('true', wp_validate_boolean('YES'));
assertType('true', wp_validate_boolean('00'));
assertType('bool', wp_validate_boolean('False'));
assertType('bool', wp_validate_boolean(Faker::string()));
assertType('bool', wp_validate_boolean(Faker::lowercaseString()));
assertType('bool', wp_validate_boolean(Faker::nonFalsyString()));

assertType('false', wp_validate_boolean(0));
assertType('true', wp_validate_boolean(123));
assertType('bool', wp_validate_boolean(Faker::int()));
assertType('true', wp_validate_boolean(Faker::positiveInt()));

assertType('false', wp_validate_boolean(null));
assertType('false', wp_validate_boolean([]));
assertType('true', wp_validate_boolean([0]));
assertType('bool', wp_validate_boolean(Faker::array()));
assertType('bool', wp_validate_boolean(Faker::float()));
assertType('bool', wp_validate_boolean(Faker::object()));
assertType('bool', wp_validate_boolean(Faker::mixed()));
