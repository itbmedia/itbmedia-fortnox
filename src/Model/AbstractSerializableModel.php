<?php

namespace ITBMedia\FortnoxBundle\Model;

use JMS\Serializer\SerializerBuilder;

abstract class AbstractSerializableModel implements SerializableInterface
{
    public function serialize()
    {
        return SerializerBuilder::create()->build()->serialize($this, 'json');
    }

    public static function deserialize(string $data)
    {
        return SerializerBuilder::create()->build()->deserialize($data, static::class, 'json');
    }

    public function toArray(bool $excludeReadonly = false): array
    {
        $data = SerializerBuilder::create()->build()->toArray($this);
        $data = $this->filterNullValues($data);

        if ($excludeReadonly) {
            $data = $this->excludeReadonlyData($data);
        }

        return $data;
    }

    protected function excludeReadonlyData(array $data): array
    {
        return $data;
    }

    public static function fromArray(array $data)
    {
        return SerializerBuilder::create()->build()->fromArray($data, static::class);
    }

    protected function filterNullValues(array $data): array
    {
        foreach ($data as $key => $value) {
            if (is_array($value)) {
                $data[$key] = $this->filterNullValues($value);
            }

            if ($data[$key] === null) {
                unset($data[$key]);
            }
        }

        return $data;
    }
}
