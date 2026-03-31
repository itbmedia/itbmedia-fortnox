<?php

namespace ITBMedia\FortnoxBundle\Factory;

use ITBMedia\FortnoxBundle\Model\FortnoxPagination;

class FortnoxResponseMetadataFactory
{
    public static function createPagination(
        array $params,
        array $responseHeaders,
        array $responseData = []
    ): ?FortnoxPagination {
        $payloadPagination = isset($responseData['pagination']) && is_array($responseData['pagination'])
            ? $responseData['pagination']
            : [];
        $headerPagination = self::decodeJsonHeader($responseHeaders['x-pagination'] ?? null);
        $items = isset($responseData['items']) && is_array($responseData['items'])
            ? $responseData['items']
            : [];

        $count = self::toNullableInt(
            $headerPagination['count']
                ?? $payloadPagination['count']
                ?? $payloadPagination['total']
                ?? null
        );
        $limit = self::toNullableInt($params['limit'] ?? $payloadPagination['limit'] ?? count($items));
        $offset = self::toNullableInt($params['offset'] ?? $payloadPagination['offset'] ?? 0);
        $lastRecord = self::toNullableBool(
            $responseHeaders['x-last-record']
                ?? $payloadPagination['lastRecord']
                ?? null
        );

        if ($count === null && $limit === null && $offset === null && $lastRecord === null) {
            return null;
        }

        return (new FortnoxPagination())
            ->setCount($count)
            ->setLimit($limit)
            ->setOffset($offset)
            ->setLastRecord($lastRecord);
    }

    private static function decodeJsonHeader($value): array
    {
        if (!is_string($value) || trim($value) === '') {
            return [];
        }

        $decoded = json_decode($value, true);

        return is_array($decoded) ? $decoded : [];
    }

    private static function toNullableInt($value): ?int
    {
        if ($value === null || $value === '') {
            return null;
        }

        if (is_int($value)) {
            return $value;
        }

        if (is_float($value)) {
            return (int) $value;
        }

        if (is_string($value) && preg_match('/^-?\d+$/', $value)) {
            return (int) $value;
        }

        return null;
    }

    private static function toNullableBool($value): ?bool
    {
        if ($value === null || $value === '') {
            return null;
        }

        if (is_bool($value)) {
            return $value;
        }

        if (is_int($value)) {
            return $value !== 0;
        }

        if (is_string($value) && preg_match('/^-?\d+$/', $value)) {
            return ((int) $value) !== 0;
        }

        return filter_var($value, FILTER_VALIDATE_BOOLEAN, FILTER_NULL_ON_FAILURE);
    }
}
