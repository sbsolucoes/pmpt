<?php

function firstWordInUpperCase(string $value): string
{
    return ucwords(
        str_replace('-', ' ', $value)
    );
}
