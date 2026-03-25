<?php

namespace ITBMedia\FortnoxBundle\Model\Response;

use ITBMedia\FortnoxBundle\Model\AbstractSerializableModel;
use ITBMedia\FortnoxBundle\Model\Recurring;
use ITBMedia\FortnoxBundle\Model\RecurringPagination;
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
     * @Serializer\Type("ITBMedia\FortnoxBundle\Model\RecurringPagination")
     * @Serializer\SerializedName("pagination")
     */
    public ?RecurringPagination $pagination = null;

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

    public function getPagination(): ?RecurringPagination
    {
        return $this->pagination;
    }

    public function setPagination(?RecurringPagination $pagination): self
    {
        $this->pagination = $pagination;
        return $this;
    }
}
