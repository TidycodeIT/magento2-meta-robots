<?php

namespace Tidycode\MetaRobotsTag\Api;

interface AttributesProviderInterface
{
    const ATTRIBUTES = [
        'no_index' => 'No index',
        'no_follow' => 'No follow',
        'no_archive' => 'No archive'
    ];

    const ATTRIBUTES_VALUE = [
        'no_index' => [
            true => 'INDEX',
            false => 'NOINDEX'
        ],
        'no_follow' => [
            true => 'FOLLOW',
            false => 'NOFOLLOW'
        ],
        'no_archive' => [
            true => 'ARCHIVE',
            false => 'NOARCHIVE'
        ]
    ];

    /**
     * @return array
     */
    public function getAttributes(): array;

    /**
     * @param bool|string $attributeCode
     * @param bool $flag
     * @return string|string[][]
     */
    public function getAttributeValue($attributeCode = false, bool $flag = false);
}
