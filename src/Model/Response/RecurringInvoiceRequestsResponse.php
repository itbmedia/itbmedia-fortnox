<?php

namespace ITBMedia\FortnoxBundle\Model\Response;

use ITBMedia\FortnoxBundle\Model\RecurringInvoiceRequest;
use ITBMedia\FortnoxBundle\Model\SerializableInterface;

class RecurringInvoiceRequestsResponse implements SerializableInterface
{
    /**
     * @var RecurringInvoiceRequest[]
     */
    private array $items = [];

    /**
     * @return RecurringInvoiceRequest[]
     */
    public function getItems(): array
    {
        return $this->items;
    }

    /**
     * @param RecurringInvoiceRequest[] $items
     */
    public function setItems(array $items): self
    {
        $this->items = $items;
        return $this;
    }

    public function serialize()
    {
        return json_encode($this->toArray(), JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);
    }

    public static function deserialize(string $data)
    {
        $decoded = json_decode($data, true);
        if (!is_array($decoded)) {
            throw new \InvalidArgumentException('Invalid recurring invoice requests response payload.');
        }

        return self::fromArray($decoded);
    }

    public function toArray(): array
    {
        return array_map(
            static fn(RecurringInvoiceRequest $item): array => $item->toArray(),
            $this->items
        );
    }

    public static function fromArray(array $data)
    {
        $items = array_map(
            static fn(array $item): RecurringInvoiceRequest => RecurringInvoiceRequest::fromArray($item),
            $data
        );

        return (new self())->setItems($items);
    }
}
