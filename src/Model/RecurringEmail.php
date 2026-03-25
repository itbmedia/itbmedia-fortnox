<?php

namespace ITBMedia\FortnoxBundle\Model;

use JMS\Serializer\Annotation as Serializer;

class RecurringEmail extends AbstractSerializableModel
{
    /**
     * @Serializer\Type("string")
     * @Serializer\SerializedName("to")
     */
    public ?string $to = null;
}
