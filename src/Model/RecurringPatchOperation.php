<?php

namespace ITBMedia\FortnoxBundle\Model;

use JMS\Serializer\Annotation as Serializer;

class RecurringPatchOperation extends AbstractSerializableModel
{
    /**
     * @Serializer\Type("string")
     * @Serializer\SerializedName("from")
     */
    public ?string $from = null;

    /**
     * @Serializer\Type("string")
     * @Serializer\SerializedName("op")
     */
    public ?string $op = null;

    /**
     * @Serializer\Type("string")
     * @Serializer\SerializedName("path")
     */
    public ?string $path = null;

    /**
     * @Serializer\SerializedName("value")
     */
    public $value = null;
}
