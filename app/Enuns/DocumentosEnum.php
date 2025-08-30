<?php

namespace App\Enuns;

abstract class DocumentosEnum
{
    const LEI = 67;

    const LEICOMPLEMENTAR = 68;

    const DECRETOS = 69;

    const PORTARIAS = 70;

    /**
     * Retorna qual o tipo de documeto que deve buscar
     */
    public static function getDocument(string $humanziDocument): int
    {
        $documents = self::documentType();

        return $documents[$humanziDocument];
    }

    public static function documentType(): array
    {
        return [
            'leis' => self::LEI,
            'lei-complementar' => self::LEICOMPLEMENTAR,
            'decretos' => self::DECRETOS,
            'portarias' => self::PORTARIAS,
        ];
    }

    public static function onlyDocuments(): array
    {
        return array_keys(self::documentType());
    }
}
