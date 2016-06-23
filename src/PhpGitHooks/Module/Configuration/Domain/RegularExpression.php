<?php

namespace PhpGitHooks\Module\Configuration\Domain;

use PhpGitHooks\Module\Shared\Domain\StringLiteralValueObject;
use PhpGitHooks\Module\Shared\Model\NullableInterface;

class RegularExpression extends StringLiteralValueObject implements NullableInterface
{
}