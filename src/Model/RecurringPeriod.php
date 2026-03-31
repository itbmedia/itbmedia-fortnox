<?php

namespace ITBMedia\FortnoxBundle\Model;

use JMS\Serializer\Annotation as Serializer;

class RecurringPeriod extends AbstractSerializableModel
{
    /**
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("anchor_day")
     */
    public ?int $anchorDay = null;

    /**
     * @Serializer\Type("string")
     * @Serializer\SerializedName("date")
     */
    public ?string $date = null;
}
