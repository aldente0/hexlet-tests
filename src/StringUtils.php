<?php 

namespace StringUtils;

function capitalize(string $text): string
{
    if ($text === '') {
        return '';
    }

    $firstChar = mb_strtoupper($text[0]);
    $restSubstring = mb_substr($text, 1);

    return "{$firstChar}{$restSubstring}";
}