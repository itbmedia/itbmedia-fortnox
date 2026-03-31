<?php

namespace ITBMedia\FortnoxBundle\Model\Response;

use ITBMedia\FortnoxBundle\Model\AbstractSerializableModel;
use ITBMedia\FortnoxBundle\Model\FortnoxPagination;
use ITBMedia\FortnoxBundle\Model\Recurring;
use JMS\Serializer\Annotation as Serializer;

class RecurringsResponse extends AbstractSerializableModel
{
    /**
     * @var Recurring[]
     * @Serializer\Type("array<ITBMedia\FortnoxBundle\Model\Recurring>")
     * @Serializer\SerializedName("items")
     */
    public array $items = [];

    /**
     * @Serializer\Type("ITBMedia\FortnoxBundle\Model\FortnoxPagination")
     * @Serializer\SerializedName("pagination")
     */
    public ?FortnoxPagination $pagination = null;

    /**
     * @return Recurring[]
     */
    public function getItems(): array
    {
        return $this->items;
    }

    /**
     * @param Recurring[] $items
     */
    public function setItems(array $items): self
    {
        $this->items = $items;
        return $this;
    }

    public function getPagination(): ?FortnoxPagination
    {
        return $this->pagination;
    }

    public function setPagination(?FortnoxPagination $pagination): self
    {
        $this->pagination = $pagination;
        return $this;
    }

    public static function deserialize(string $data)
    {
        $decoded = json_decode($data, true);
        if (!is_array($decoded)) {
            throw new \InvalidArgumentException('Invalid recurrings response payload.');
        }

        return self::fromArray($decoded);
    }

    public static function fromArray(array $data)
    {
        $itemsData = self::isListArray($data)
            ? $data
            : (isset($data['items']) && is_array($data['items']) ? $data['items'] : []);
        $paginationData = !self::isListArray($data) && isset($data['pagination']) && is_array($data['pagination'])
            ? $data['pagination']
            : null;

        $items = array_map(
            static fn(array $item): Recurring => Recurring::fromArray($item),
            $itemsData
        );

        $response = (new self())->setItems($items);

        if ($paginationData !== null) {
            $response->setPagination(FortnoxPagination::fromArray($paginationData));
        }

        return $response;
    }

    private static function isListArray(array $value): bool
    {
        if ($value === []) {
            return true;
        }

        return array_keys($value) === range(0, count($value) - 1);
    }
}
