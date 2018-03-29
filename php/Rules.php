<?php

namespace Teamleader\Linting;

class Rules
{
    public static function default(): array
    {
        return [
            '@Symfony' => true,
            'ordered_imports' => true,
            'phpdoc_align' => false,
            'phpdoc_to_comment' => false,
            'phpdoc_inline_tag' => false,
            'yoda_style' => false,
            'blank_line_before_statement' => false,
            'phpdoc_separation' => false,
            'concat_space' => [
                'spacing' => 'one',
            ],
        ];
    }
}
