<?php

namespace ITBMedia\FortnoxBundle\Model;

use JMS\Serializer\Annotation as Serializer;

class FortnoxPagination extends AbstractSerializableModel
{
    /**
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("count")
     */
    public ?int $count = null;

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
     * @Serializer\Type("boolean")
     * @Serializer\SerializedName("lastRecord")
     */
    public ?bool $lastRecord = null;

    public function getCount(): ?int
    {
        return $this->count;
    }

    public function setCount(?int $count): self
    {
        $this->count = $count;
        return $this;
    }

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
        return $this->count;
    }

    public function setTotal(?int $total): self
    {
        $this->count = $total;
        return $this;
    }

    public function getLastRecord(): ?bool
    {
        return $this->lastRecord;
    }

    public function isLastRecord(): ?bool
    {
        return $this->lastRecord;
    }

    public function setLastRecord(?bool $lastRecord): self
    {
        $this->lastRecord = $lastRecord;
        return $this;
    }
}
