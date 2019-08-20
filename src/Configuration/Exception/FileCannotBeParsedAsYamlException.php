<?php

declare(strict_types=1);

namespace SensioLabs\Deptrac\Configuration\Exception;

final class FileCannotBeParsedAsYamlException extends \RuntimeException
{
    public static function fromFilename(string $filename): self
    {
        return new self(sprintf(
            'File "%s" cannot be parsed as YAML.',
            $filename
        ));
    }
}
