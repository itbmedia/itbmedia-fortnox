<?php

namespace ITBMedia\FortnoxBundle\Model;

use JMS\Serializer\Annotation as Serializer;

class RecurringPagination extends AbstractSerializableModel
{
    /**
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("limit")
     */
    public ?int $limit = null;

    /**
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("offset")
     */
    public ?int $offset = null;

    /**
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("total")
     */
    public ?int $total = null;

    public function getLimit(): ?int
    {
        return $this->limit;
    }

    public function setLimit(?int $limit): self
    {
        $this->limit = $limit;
        return $this;
    }

    public function getOffset(): ?int
    {
        return $this->offset;
    }

    public function setOffset(?int $offset): self
    {
        $this->offset = $offset;
        return $this;
    }

    public function getTotal(): ?int
    {
        return $this->total;
    }

    public function setTotal(?int $total): self
    {
        $this->total = $total;
        return $this;
    }
}
